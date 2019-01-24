$( document ).ready(function() {
 
    var combinedValues = [];
    var operators = ['x', '÷', '-', '+'];
    var other = ['Cear', '='];
    var values = [];
    
    var calcValues = [];
    
    var allowPoint = true;
    var allowOperator = true;

    $('.btn').click(function() {
        
        var currentValue = $(this).text();
        var len = values.length;
        
        // check for length greater than 0 and operators
        // only allow operators if length greater than 1
        // also only allow operators if last value was NOT an operator
        
        function isOperator(val) {
            if( operators.indexOf( val ) > -1 ) {
                return true;
            } else {
                return false;
            }
        }
        
        function isNumber(val) {
            if( val != '.' && !isOperator(val) ) {
                if( other.indexOf( val ) == -1 ) {
                    return true;
                } 

            } else {
                return false;
            }
        }
        
        if( isOperator( currentValue ) ) {
            if( len > 0 && isNumber(values[len -1]) ) {
                if( currentValue == '÷') {
                    calcValues.push('/');
                }

                else if ( currentValue == 'x') {
                    calcValues.push('*');
                } else {
                    calcValues.push( currentValue );
                }
                
                // must be an operator and be preceeded by a number
                values.push(currentValue)
                allowPoint = true;
            }
        }

        
        if ( currentValue === '.' && allowPoint ) {
            if( len == 0 ) {
                values.push(0);
                calcValues.push(0);
                values.push( currentValue );
                calcValues.push( currentValue );
                allowPoint = false;
            // check preceeding value is a number
            } else if ( isNumber(values[ len - 1 ]) ){
                values.push( currentValue );
                calcValues.push( currentValue );
                allowPoint = false;
            }
        }
        
        // adds number, checking first for preceeding zeros
        if( isNumber( currentValue ) ) {
            if( currentValue == 0 && len != 0 ) {
                values.push( currentValue );
                calcValues.push( currentValue );
            } else if ( currentValue != 0 ) {
                values.push( currentValue );
                calcValues.push( currentValue );
            }
        }
        
        function findPlace(aStr) {
            for( var i = 0; i < aStr.length; i++ ) {
                var num = parseInt(aStr[i]);
                if( num > 0) {
                    return i;
                }
            }
                
        }
        
        // displays the input
        if ( values.length > 0 ) {
            $('#result').text(values.join(''));
        }
        
        if( currentValue == '=' ) {
            // check the len is 3 or greater
            // check that the last value is a number
            if( len >= 3 && isNumber(values[ len - 1 ]) ) {
                
                
                var copy = calcValues.join('');
                
                var temp = eval(copy);
                
                // this is the whole number
                if ( temp % 1 == 0 ) {
                    $('#result').text( temp ); 
                    
                // this is the decimal
                } else {
                    let strTemp = String(temp);
                    if( strTemp.length > 14 || strTemp[0] == '0' ) {
                        let place = findPlace(strTemp);
                        $('#result').text( temp.toFixed( place + 1 ) );
                        
                    } else {
                        $('#result').text( temp.toFixed(1) );
                    }
                }
            }
        }
        
        // removes all values and clear the screen
        if ( currentValue === 'Clear') {
            $('#result').text(0);
            values = [];
            calcValues = [];
            allowPoint = true;
        }
        
        // ensures the values don't go outside the result area
        if( $('#result').text().length >=14 ) {
            values = [];
            calcValues = [];
            $('#result').text("Digit limit");   
        }
    });
});