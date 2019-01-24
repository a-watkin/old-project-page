$( document ).ready(function() {

    jQuery(document).ready(function($){
       getLocation();
    });

    // 53.5758665&lon=-2.4774648999999997
    var lat = 53.5758665;
    var lon = -2.4774648999999997;
    var tempCelsius = 0;
    var tempFahrenheit = 0;
    var apiKey = "d950873a47b1db2e7c557e8d449002c6";
    var tempMeasure = 0;

    function setTemperatureData(kelvin) {
        // i'm using slicing to round here

        // doesn't seem to need the slice part?
        tempFahrenheit = (9 / 5 * (kelvin -273).toString().slice(0, 3) + 32);
        tempCelsius = (kelvin -273.15).toString().slice(0, 3);
    }

    // var x = document.getElementById("demo");
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                lat = position.coords.latitude;
                lon = position.coords.longitude;
                // console.log(position.coords.latitude + ' ' + position.coords.longitude);
                // console.log(lat + ' ' + lon);
                getWeatherData();
            });
        } else {
            $("#weather-info").html("Geolocation is not supported by this browser.");
        }
    }


    // api.openweathermap.org/data/2.5/forecast?id=524901&APPID=1111111111
    function getWeatherData() {
        var url = "https://api.openweathermap.org/data/2.5/weather?lat=" + lat + "&lon=" + lon + "&APPID=" + apiKey;


        // console.log("http://api.openweathermap.org/data/2.5/weather?lat=53.5758665&lon=-2.4774648999999997&APPID=d950873a47b1db2e7c557e8d449002c6" + " \n " + url);


        console.log('called ' + url);
        $.get(url).done(function(response) {
            // sets global variables for temperatures
            setTemperatureData(response.main.temp);

            var iconUrl = "http://openweathermap.org/img/w/" + response.weather[0].icon + ".png";
            var weatherDescription = response.weather[0].description;
            

            $("#weather-info").html(
                "<h3>" + response.name + "<h3><br><img src=" 
                + iconUrl +  ">" + " " 
                + weatherDescription + "<br>"
                );

            $("#temp-data").html(
                tempCelsius + " <a href='#'>&#8451</a>"
            );
        });
    }


    $("#temp-data").on("click", function() {
        if (tempMeasure == 1) {
            $("#temp-data").html(tempCelsius + " <a href='#'>&#8451</a>");
            tempMeasure = 0;
        } else {
            $("#temp-data").html(tempFahrenheit + " <a href='#'>&#x2109</a>");
            tempMeasure = 1;
        }
    });
});
