<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Font awesome icons -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <!-- my css file -->
  <link rel="stylesheet" href="style.css">

  <!-- my script file -->
  <script src="script.js"></script>

  <title>Project page</title>
</head>

<body>
  <!-- Nav bar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
    <div class="container">


      <a class="navbar-brand" href="#">A Watkin</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://awatkin.eu/about">About</a>
          </li>
          <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Projects
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#my-projects">My projects</a>
              <div class="dropdown-divider"></div>
              
              
              <a class="dropdown-item" href="#todo-list">Django To-Do list
              </a>

               <a class="dropdown-item" href="#pricing-service">Pricing service
              </a>
              
                                         
           <a class="dropdown-item" href="#django-ecommerce">Django ecommerce
</a>
                                         
                                         
                                          
              <a class="dropdown-item" href="#wiki-goo">Wiki-goo</a>

              <!-- <div class="dropdown-divider"></div> -->
              <a class="dropdown-item" href="#presentation-timer">Presentation timer
              </a>
              <a class="dropdown-item" href="#presentation-timer-js">Presentation timer JavaScript

              </a>
              <a class="dropdown-item" href="#quizzer">Quizzer
              </a>
              
                            <a class="dropdown-item" href="#flask-quizzer">Flask Quizzer
              </a>
              <a class="dropdown-item" href="#godel-tribute">Godel tribute
              </a>

           
           
            </div>
          </li>
          <li>
            <a class="nav-link" href="mailto:awatkin.work@gmail.com">Contact <span class="sr-only">(current)</span></a>

          </li>

        </ul>

      </div>
    </div>
  </nav>
<!--  end of nav  -->


<!-- container for page content -->
<div class="container">

  
  <span class="internal-link" id="my-projects"></span>

  <div class="row">
    <div class="col">
      <h1>My projects</h1>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <p>
        A list of projects that I have completed or that I am still working on. This is not yet a complete list. I will be adding more as I find the time to do so, currently I have quite a large backlog.
        
      </p>
      
      <p>
          Some of these are original personal projects and others projects that I have done as part of courses or that were inspired by those courses.
      </p>
    </div>
  </div>


  <hr>






<!--start todo list-->

<!--intrnal link-->
<span class="internal-link" id="todo-list"></span>
 
  <!-- project title -->
  <div class="text-center">

    <h2>Django To-Do list</h2>

  </div>

  <!-- description section -->
  <div class="row">
    <div class="col">
      <H3>Description</H3>
       
       <div class="row">
       <div class="col">
        <p>
        A todo list made using django and following TDD principles.

        It features custom passwordless authorisation.

        
        This project is me following the book TDD with Python
        <a href="https://www.obeythetestinggoat.com/">Link to book</a>
        and
        
        <a href="https://github.com/hjwp/book-example/blob/master/README.md">repository of that book here, by chapters here.</a>
        </p>
        </div>
        </div>
    </div>
  </div>


    <!-- screen shots -->
    <div class="row">
      
      <div class="col">

        <h4>Screenshot</h4>

      </div>

    </div>


    <!-- screenshot -->
    <div class="row text-center">
      <div class="col">
       <a href="http://awatkin.eu">
        <img
        id="screenshot"
         src="images/django-tdd-screenshot.png" alt="screenshot" class="img-fluid screenshot" ></a>

      </div>

    </div>


    
    <!-- tech section -->
    <div class="row">
      <div class="col">
        <h5>Technologies used</h5>
      </div>
    </div>

    <div class="row text-justified">

      <div class="col-2"></div>

        <div class="col-4 center text-left">
          <ul id="tech-used">
            <li>Python</li>
            <li>Django</li>
            <li>TDD</li>
            <li>Nginx</li>
            <li>Selenium</li>
          </ul>
        </div>

        <div class="col-4">
          <ul id="tech-used">
            <li>jQuery</li>
            <li>Bootstrap</li>
            <li>Gunicorn</li>
            <li>Fabric3</li>
            <li>SQLite</li>
          </ul>
        </div>

      <div class="col-2"></div>

    </div>


    <!-- links section -->
    <div class="project-links">
  
      <!-- section title -->
      <div class="row">
        <div class="col">
          <h6 class="section-title">Github and Live version</h6>
        </div>
      </div>

      
      <div class="row text-center" id="icon-links">

        <div class="col-6">
          <a href='https://github.com/a-watkin/django-tdd' target='_blank'>
            <i class='fab fa-github fa-2x' aria-hidden='true'></i></a>
          <p>
            Git repository
          </p>
        </div>

        <div class="col-6">
          <a href="http://awatkin.eu/">
            <svg id="i-external" viewBox="0 0 32 32" width="32" height="32" fill="none"
            stroke="currentcolor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2">
            <path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" />
            </svg>
          </a>
          <p>
            Live version
          </p>
        </div>

      </div>

    </div>
    
<!--end todo list-->
    






<!--start pricing service -->

<!--internal link-->
<span class="internal-link" id="pricing-service"></span>
 
 
 
  <!-- project title -->
  <div class="text-center">

    <h2>Pricing service</h2>

  </div>

  <!-- description section -->
  <div class="row">
    <div class="col">
      <H3>Description</H3>
       
       <div class="row">
       <div class="col">
        <p>
        Pricins service keeps track of product prices on an external website and emails users via mailgun API when a specified price point is reached.
        </p>
        </div>
        </div>
    </div>
  </div>




    <!-- screen shots -->
    <div class="row">
      
      <div class="col">

        <h4>Screenshot</h4>

      </div>

    </div>


    <!-- screenshot -->
    <div class="row text-center">
      <div class="col">
       <a href="https://pricing-service-exercise.herokuapp.com">
        <img
        id="screenshot"
         src="images/pricing-service.png" alt="screenshot" class="img-fluid screenshot" ></a>

      </div>

    </div>


    
    <!-- tech section -->
    <div class="row">
      <div class="col">
        <h5>Technologies used</h5>
      </div>
    </div>

    <div class="row text-justified">

      <div class="col-2"></div>

        <div class="col-4 center text-left">
          <ul id="tech-used">
            <li>Python</li>
            <li>Flask</li>
            <li>Beautiful Soup</li>
            <li>Mailgun</li>
          </ul>
        </div>

        <div class="col-4">
          <ul id="tech-used">
            <li>Mongodb</li>
            <li>HTML/CSS</li>
            <li>Bootstrap</li>
            <li>Heroku</li>
          </ul>
        </div>

      <div class="col-2"></div>

    </div>


    <!-- links section -->
    <div class="project-links">
  
      <!-- section title -->
      <div class="row">
        <div class="col">
          <h6 class="section-title">Github and Live version</h6>
        </div>
      </div>

      
      <div class="row text-center" id="icon-links">

        <div class="col-6">
          <a href='https://github.com/a-watkin/pricing-service-exercise' target='_blank'>
            <i class='fab fa-github fa-2x' aria-hidden='true'></i></a>
          <p>
            Git repository
          </p>
        </div>

        <div class="col-6">
          <a href="https://pricing-service-exercise.herokuapp.com">
            <svg id="i-external" viewBox="0 0 32 32" width="32" height="32" fill="none"
            stroke="currentcolor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2">
            <path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" />
            </svg>
          </a>
          <p>
            Live version on Heroku
          </p>
        </div>

      </div>

    </div>
    
<!--end pricing service-->


<hr>


<!--start django-ecommerce -->

<!--internal link-->
<span class="internal-link" id="django-ecommerce"></span>
 
  <!-- project title -->
  <div class="text-center">

    <h2>Django ecommerce</h2>

  </div>

  <!-- description section -->
  <div class="row">
    <div class="col">
      <H3>Description</H3>
       
       <div class="row">
       <div class="col">
          <p>
          A generic ecommerce site site with call to action, user accounts and payment processing using stripe API.
          </p>
          </div>
        </div>
    </div>
  </div>


    <!-- screen shots -->
    <div class="row">
      
      <div class="col">

        <h4>Screenshot</h4>

      </div>

    </div>


    <!-- screenshot -->
    <div class="row text-center">
      <div class="col">
        <img src="images/django-stripe.png" id="screenshot" alt="screenshot" class=".img-fluid" >

      </div>

    </div>


    
    <!-- tech section -->
    <div class="row">
      <div class="col">
        <h5>Technologies used</h5>
      </div>
    </div>

    <div class="row text-justified">

      <div class="col-2"></div>

        <div class="col-4 center text-left">
          <ul id="tech-used">
            <li>Python</li>
            <li>Django</li>
            <li>Javascript</li>
            <li>Stripe API</li>

          </ul>
        </div>

        <div class="col-4">
          <ul id="tech-used">
            <li>SQLite</li>
            <li>HTML/CSS</li>
            <li>jQuery</li>
            <li>Bootstrap</li>
          </ul>
        </div>
        
      <div class="col-2"></div>

    </div>


    <!-- links section -->
    <div class="project-links">
  
      <!-- section title -->
      <div class="row">
        <div class="col">
          <h6 class="section-title">Source code and Live version</h6>
        </div>
      </div>

      
      <div class="row text-center" id="icon-links">

        <!--    Github    -->
        <div class="col-6">
          <a href="https://github.com/a-watkin/django-ecommerce" target='_blank'>
            <i class='fab fa-github fa-2x' aria-hidden='true'></i></a>
          <p>
             Github repository
          </p>
        </div>

        <div class="col-6">
            
            
        <!--    live version     -->
         
            <!--    external link to project     -->
          <a href="">
            <i class="fas fa-external-link-alt fa-2x"></i>
          </a>
          <p>
            Not currently live
          </p>
        </div>

      </div>

    </div>
    
<!--end django-ecommerce -->




<hr>

  <span class="internal-link" id="wiki-goo"></span>


  <!-- project title -->
  <div class="text-center">

    <h2>Wiki-goo</h2>

  </div>

  <!-- description section -->
  <div class="row">
    <div class="col text-left">
      <H3>Description</H3>
       

        
        <p class="description">
          Wiki-goo is a mash up of the wikipedia and google maps APIs. Given an address it returns a marker for that address and wikipedia articles related to that area so you can discover interesting things connected to that area.

          Bootsrap has been used for basic styling and Bootstrap Toggle toggle for sliding buttons.
        </p>

    </div>
  </div>


    <!-- screen shots -->
    <div class="row">
      
      <div class="col">

        <h4>Screenshots and features</h4>

      </div>

    </div>

    <div class="card-group">
      <div class="card">
        <img class="card-img-top" src="images/wiki-goo-map.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Map of results</h5>
          <p class="card-text">Markers show the given location and results which include links.</p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images/wiki-goo-list.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">List of results</h5>
          <p class="card-text">Results are also shown in a list of links.</p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images/wiki-goo-walking-distance.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Walking distances</h5>
          <p class="card-text">An estimate of walking time can be overlaid on the map..</p>
        </div>
      </div>
    </div>


    
    <!-- tech section -->
    <div class="row">
      <div class="col">
        <h5>Technologies used</h5>
      </div>
    </div>

    <div class="row text-justified">

      <div class="col-2"></div>

        <div class="col-4 center text-left">
          <ul id="tech-used">
            <li>Javascript</li>
            <li>jQuery</li>
            <li>Wikipedia API</li>
          </ul>
        </div>

        <div class="col-4">
          <ul id="tech-used">
            <li>Google maps API</li>
            <li>Bootstrap</li>
            <li>Bootstrap Toggle</li>
          </ul>
        </div>

      <div class="col-2"></div>

    </div>


    <!-- links section -->
    <div class="project-links">
  
      <!-- section title -->
      <div class="row">
        <div class="col">
          <h6 class="section-title">Github and Live version</h6>
        </div>
      </div>

      
      <div class="row text-center" id="icon-links">

        <div class="col-6">
          <a href='https://github.com/a-watkin/wiki-goo' target='_blank'>
            <i class='fab fa-github fa-2x' aria-hidden='true'></i></a>
          <p>
            Git repository
          </p>
        </div>

        <div class="col-6">
          <a href="wiki-goo/index.html">
            <svg id="i-external" viewBox="0 0 32 32" width="32" height="32" fill="none"
            stroke="currentcolor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2">
            <path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" />
            </svg>
          </a>
          <p>
            Live version
          </p>
        </div>

      </div>

    </div>
 
    <hr>




<!--start javascript calculator-->

<span class="internal-link" id="js-calc"></span>
  <!-- project title -->
  <div class="text-center">

    <h2>Javascript calculator</h2>

  </div>

  <!-- description section -->
  <div class="row">
    <div class="col">
      <H3>Description</H3>
       
       <div class="row">
       <div class="col">
        <p>
        This project was done as part of the <a href="https://learn.freecodecamp.org/">Freecodecamp</a> front end libraries certification.
        </p>
        </div>
        </div>
    </div>
  </div>


    <!-- screen shots -->
    <div class="row">
      
      <div class="col">

        <h4>Screenshot</h4>

      </div>

    </div>


    <!-- screenshot -->
    <div class="row text-center">
      <div class="col">
       <a href="https://codepen.io/adevwatkin/full/KRXaNK/">
        <img
        id="screenshot"
         src="images/js-cal-crop.png" alt="screenshot" class="img-fluid screenshot" ></a>

      </div>

    </div>


    
    <!-- tech section -->
    <div class="row">
      <div class="col">
        <h5>Technologies used</h5>
      </div>
    </div>

    <div class="row text-justified">

      <div class="col-2"></div>

        <div class="col-4 center text-left">
          <ul id="tech-used">
            <li>Javascript</li>
            <li>Bootstrap</li>

          </ul>
        </div>

        <div class="col-4">
          <ul id="tech-used">
            <li>jQuery</li>
            <li>HTML/CSS</li>
          </ul>
        </div>
        
      <div class="col-2"></div>

    </div>


    <!-- links section -->
    <div class="project-links">
  
      <!-- section title -->
      <div class="row">
        <div class="col">
          <h6 class="section-title">Source code and Live version</h6>
        </div>
      </div>

      
      <div class="row text-center" id="icon-links">

        <!--    codepen    -->
        <div class="col-6">
          <a href="https://codepen.io/adevwatkin/pen/KRXaNK" target='_blank'>
            <i class='fab fa-codepen fa-2x' aria-hidden='true'></i></a>
          <p>
             View code on codepen
          </p>
        </div>

        <div class="col-6">
            
            
        <!--    live version     -->
         
            <!--    external link to project     -->
          <a href="https://codepen.io/adevwatkin/full/KRXaNK/">
            <i class="fas fa-external-link-alt fa-2x"></i>
          </a>
          <p>
            Live version on codepen
          </p>
        </div>

      </div>

    </div>
    
<!--end javascript calculator-->






<hr>



<!--start presentation timer -->

<span class="internal-link" id="presentation-timer"></span>
  <!-- project title -->
  <div class="text-center">

    <h2>Presentation timer</h2>

  </div>

  <!-- description section -->
  <div class="row">
    <div class="col">
      <H3>Description</H3>
       
       <div class="row">
       <div class="col">
          <p>
          Presentation Timer is intended to help academics and other people practice presentations with strict time limits.<br><br>

          It allows for up to two warnings to be displayed visually, audibly or both at any time during the presentation. The visual warning is modeled after how academic conferences warn presenters about how much time they have remaining.<br><br>

          Requirements about the presentation process at conferences were elicited from Dr Jaana Eigi who provided valuable insights.<br><br>

          The program is written in python and uses the Tkinter interface to present a GUI to the user.<br><br>

          It has also been converted to a standalone program using py2exe.
          </p>
          </div>
        </div>
    </div>
  </div>


    <!-- screen shots -->
    <div class="row">
      
      <div class="col">

        <h4>Screenshot</h4>

      </div>

    </div>


    <!-- screenshot -->
    <div class="row text-center">
      <div class="col">
        <img src="images/presentation-timer-screenshot.png" id="screenshot" alt="screenshot" class=".img-fluid" >

      </div>

    </div>


    
    <!-- tech section -->
    <div class="row">
      <div class="col">
        <h5>Technologies used</h5>
      </div>
    </div>

    <div class="row text-justified">

      <div class="col-2"></div>

        <div class="col-4 center text-left">
          <ul id="tech-used">
            <li>Python</li>
            <li>Tkinter</li>

          </ul>
        </div>

        <div class="col-4">
          <ul id="tech-used">
            <li>Py2exe</li>
          </ul>
        </div>
        
      <div class="col-2"></div>

    </div>


    <!-- links section -->
    <div class="project-links">
  
      <!-- section title -->
      <div class="row">
        <div class="col">
          <h6 class="section-title">Source code and Live version</h6>
        </div>
      </div>

      
      <div class="row text-center" id="icon-links">

        <!--    codepen    -->
        <div class="col-6">
          <a href="https://github.com/a-watkin/presentation-timer" target='_blank'>
            <i class='fab fa-github fa-2x' aria-hidden='true'></i></a>
          <p>
             View code on codepen
          </p>
        </div>

        <div class="col-6">
            
            
        <!--    live version     -->
         
            <!--    external link to project     -->
          <a href="">
            <i class="fas fa-external-link-alt fa-2x"></i>
          </a>
          <p>
            No live version
          </p>
        </div>

      </div>

    </div>
    
<!--end presentation timer -->


<hr>

<!--start presentation timer JS -->

<span class="internal-link" id="presentation-timer-js"></span>
  <!-- project title -->
  <div class="text-center">

    <h2>Presentation timer JavaScript version</h2>

  </div>

  <!-- description section -->
  <div class="row">
    <div class="col">
      <H3>Description</H3>
       
       <div class="row">
       <div class="col">
          <p>
            Presentation Timer is a small application intended to help academics and other people practice presentations with strict time limits. It allows for up to two warnings to be displayed visually or audibly or both at any time during the presentation. The visual warning is modeled after how academic conferences warn presenters about how much time they have remaining. Requirements about the presentation process at conferences were elicited from Jaana Eigi who provided valuable insights. This is the JavaScript version that runs as a static single page app. 
          </p>
          </div>
        </div>
    </div>
  </div>


    <!-- screen shots -->
    <div class="row">
      
      <div class="col">

        <h4>Screenshot</h4>

      </div>

    </div>


    <!-- screenshot -->
    <div class="row text-center">
      <div class="col">
        <img src="images/presentation-time-js-screenshot.png" id="screenshot" alt="screenshot" class=".img-fluid" >

      </div>

    </div>


    
    <!-- tech section -->
    <div class="row">
      <div class="col">
        <h5>Technologies used</h5>
      </div>
    </div>

    <div class="row text-justified">

      <div class="col-2"></div>

        <div class="col-4 center text-left">
          <ul id="tech-used">
            <li>Javascript</li>
            <li>AngularJS 1</li>

          </ul>
        </div>

        <div class="col-4">
          <ul id="tech-used">
            <li>jQuery</li>
            <li>HTML/CSS</li>
          </ul>
        </div>
        
      <div class="col-2"></div>

    </div>


    <!-- links section -->
    <div class="project-links">
  
      <!-- section title -->
      <div class="row">
        <div class="col">
          <h6 class="section-title">Source code and Live version</h6>
        </div>
      </div>

      
      <div class="row text-center" id="icon-links">

        <!--    codepen    -->
        <div class="col-6">
          <a href="https://github.com/a-watkin/presentation-timer-js" target='_blank'>
            <i class='fab fa-github fa-2x' aria-hidden='true'></i></a>
          <p>
             View code on codepen
          </p>
        </div>

        <div class="col-6">
            
            
        <!--    live version     -->
         
            <!--    external link to project     -->
          <a href="https://a-watkin.github.io/">
            <i class="fas fa-external-link-alt fa-2x"></i>
          </a>
          <p>
            Live version
          </p>
        </div>

      </div>

    </div>
    
<!--end presentation timer JS -->





<hr>


<!--start quizzer -->

<span class="internal-link" id="quizzer"></span>

  <!-- project title -->
  <div class="text-center">

    <h2>Quizzer</h2>

  </div>

  <!-- description section -->
  <div class="row">
    <div class="col">
      <H3>Description</H3>
       
       <div class="row">
       <div class="col">
        <p>
            Quizzer is a small desktop application that reads an SQLite database of countries and then asks what the capital of a randomly chosen country is.

            It presents this in the form of a multiple choice question with one correct answer and three incorrect answers.

            The application uses Tkinter to present itself as a GUI for the user to interact with. I wrote this mainly as a small project to familiarise myself with the Tkinter interface.
  
        </p>
           


        </div>
        </div>
    </div>
  </div>


    <!-- screen shots -->
    <div class="row">
      
      <div class="col">

        <h4>Screenshot</h4>

      </div>

    </div>


    <!-- screenshot -->
    <div class="row text-center">
      <div class="col">
        <img
        id="screenshot"
         src="images/quizzer-screenshot.png" alt="screenshot" class="img-fluid screenshot" >

      </div>
    </div>




    <!-- tech section -->
    <div class="row">
      <div class="col">
        <h5>Technologies used</h5>
      </div>
    </div>

    <div class="row text-justified">

      <div class="col-2"></div>

        <div class="col-4 center text-left">
          <ul id="tech-used">
            <li>Python</li>
            <li>Tkinter</li>


          </ul>
        </div>

        <div class="col-4">
          <ul id="tech-used">
            <li>SQLite</li>
            <li>Py2exe</li>

          </ul>
        </div>
        
      <div class="col-2"></div>

    </div>


    <!-- links section -->
    <div class="project-links">
  
      <!-- section title -->
      <div class="row">
        <div class="col">
          <h6 class="section-title">Source code and Live version</h6>
        </div>
      </div>

      
      <div class="row text-center" id="icon-links">

        <!--    github    -->
        <div class="col-6">
          <a href="https://github.com/a-watkin/quizzer" target='_blank'>
            <i class='fab fa-github fa-2x' aria-hidden='true'></i></a>
          <p>
             View code on github
          </p>
        </div>

        <div class="col-6">
            
            
        <!--    live version     -->
         
            <!--    external link to project     -->
          <a href="">
            <i class="fas fa-external-link-alt fa-2x"></i>
          </a>
          <p>
            No live version
          </p>
        </div>

      </div>

    </div>
    
<!--end quizzer -->



<hr>


<!--start flask quizzer -->

<span class="internal-link" id="flask-quizzer"></span>

  <!-- project title -->
  <div class="text-center">

    <h2>Quizzer -Flask web app</h2>

  </div>

  <!-- description section -->
  <div class="row">
    <div class="col">
      <H3>Description</H3>
       
       <div class="row">
       <div class="col">
        <p>
            Quizzer is a small desktop application that reads an SQLite database of countries and then asks what the capital of a randomly chosen country is.

            It presents this in the form of a multiple choice question with one correct answer and three incorrect answers.

            This is a web app version of the Tkinter version above.
        </p>
           


        </div>
        </div>
    </div>
  </div>


    <!-- screen shots -->
    <div class="row">
      
      <div class="col">

        <h4>Screenshots</h4>

      </div>

    </div>


    <!-- screenshot -->
     <div class="row text-center">
      <div class="col">
        <img
        id="screenshot"
         src="images/quizzer-web-crop.png" alt="screenshot" class="img-fluid screenshot" >

      </div>
    </div>




    <!-- tech section -->
    <div class="row">
      <div class="col">
        <h5>Technologies used</h5>
      </div>
    </div>

    <div class="row text-justified">

      <div class="col-2"></div>

        <div class="col-4 center text-left">
          <ul id="tech-used">
            <li>Python</li>
            <li>Falsk</li>
            <li>Bootstrap</li>

          </ul>
        </div>

        <div class="col-4">
          <ul id="tech-used">
            <li>SQLite</li>
            <li>HTML/CSS</li>
            <li>Heroku</li>
          </ul>
        </div>
        
      <div class="col-2"></div>

    </div>


    <!-- links section -->
    <div class="project-links">
  
      <!-- section title -->
      <div class="row">
        <div class="col">
          <h6 class="section-title">Source code and Live version</h6>
        </div>
      </div>

      
      <div class="row text-center" id="icon-links">

        <!--    github    -->
        <div class="col-6">
          <a href="https://github.com/a-watkin/quizzer" target='_blank'>
            <i class='fab fa-github fa-2x' aria-hidden='true'></i></a>
          <p>
             View code on github
          </p>
        </div>

        <div class="col-6">
            
            
        <!--    live version     -->
         
            <!--    external link to project     -->
          <a href="https://calm-reaches-91520.herokuapp.com">
            <i class="fas fa-external-link-alt fa-2x"></i>
          </a>
          <p>
            Live version (flask version, on Heroku)
          </p>
        </div>

      </div>

    </div>
    
<!--end quizzer -->

<hr>




<!--start godel tribute page-->

<span class="internal-link" id="godel-tribute"></span>

  <!-- project title -->
  <div class="text-center">

    <h2>Gödel tribute page</h2>

  </div>

  <!-- description section -->
  <div class="row">
    <div class="col">
      <H3>Description</H3>
       
       <div class="row">
       <div class="col">
        <p>
            A Gödel tribute page made on codepen as practice and as part of a freecodecamp tutorial.
        </p>
           


        </div>
        </div>
    </div>
  </div>


    <!-- screen shots -->
    <div class="row">
      
      <div class="col">

        <h4>Screenshot</h4>

      </div>

    </div>


    <!-- screenshot -->
     <div class="row text-center">
      <div class="col">
        <img
        id="screenshot"
         src="https://adevwatkin.com/images/godel-page-thumbnail.png" alt="screenshot" class="img-fluid screenshot" >

      </div>
    </div>




    <!-- tech section -->
    <div class="row">
      <div class="col">
        <h5>Technologies used</h5>
      </div>
    </div>

    <div class="row text-justified">

      <div class="col-2"></div>

        <div class="col-4 center text-left">
          <ul id="tech-used">
            <li>HTML/CSS</li>

          </ul>
        </div>

        <div class="col-4">
          <ul id="tech-used">
            <li>Bootstrap</li>
          </ul>
        </div>
        
      <div class="col-2"></div>

    </div>


    <!-- links section -->
    <div class="project-links">
  
      <!-- section title -->
      <div class="row">
        <div class="col">
          <h6 class="section-title">Source code and Live version</h6>
        </div>
      </div>

      
      <div class="row text-center" id="icon-links">

        <!--    codepen    -->
        <div class="col-6">
          <a href="" target='_blank'>
            <i class='fab fa-github fa-2x' aria-hidden='true'></i></a>
          <p>
             Git repository
          </p>
        </div>

        <div class="col-6">
            
            
        <!--    live version     -->
         
            <!--    external link to project     -->
          <a href="https://codepen.io/adevwatkin/project/full/DWMjoE">
            <i class="fas fa-external-link-alt fa-2x"></i>
          </a>
          <p>
            Live version
          </p>
        </div>

      </div>


<!--end godel tribute page-->

















    <!-- end of main content container -->
    <hr>
    <footer>
      <div class="container text-center">

        <!-- title social media links -->
        <div class="row">
          <div class="col-sm-12">
            <p class="">
              <h3>Me around the web</h3>
            </p>
          </div>
        </div>

        <!-- start of social media links -->
        <div class="row" id="social-media">

          <div class="col-sm-2">
            <a href='https://github.com/a-watkin?tab=repositories' target='_blank'>
            <i class='fab fa-github fa-2x' aria-hidden='true'></i>
            </a>
          </div>

          <!-- stackoverflow link -->
          <div class="col-sm-2">
            <a href='https://stackoverflow.com/users/6875013/a-watkin?tab=profile' target='_blank'>
            <i class='fab fa-stack-overflow fa-2x' aria-hidden='true'></i>
            </a>
          </div>

         
         
          <!-- email contact -->
          <div class="col-sm-4">
            <a href='mailto:awatkin.work@gmail.com'>
            <i class='fas fa-envelope fa-2x' aria-hidden='true'></i>
            </a>
          </div>
         
         
         
         
          <!-- twitter link -->
          <div class="col-sm-2">
            <a href='https://twitter.com/adevwatkin' target='_blank'>
              <i class='fab fa-twitter fa-2x' aria-hidden='true'></i>
            </a>
          </div>

          <!-- freecodecamp link -->
          <div class="col-sm-2">
            <a href='https://www.freecodecamp.org/a-watkin' target='_blank'>
            <i class='fab fa-free-code-camp fa-2x' aria-hidden='true'></i>
            </a>
          </div>

        </div>
        <!-- end of links social media links -->

        <!-- copyright -->
        <div class="row">
          <div class="col-sm-12">
            <p class="text-center">
            © A Watkin
            </p>
          </div>
        </div>


      </div>
      <!-- end of footer text-center container -->

    </footer>

  </body>
</html>
