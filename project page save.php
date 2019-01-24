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

    <!-- my css file -->
    <link rel="stylesheet" href="style.css">
    
    <!-- my script file -->
    <script src="script.js"></script>
   
    <title>Project page</title>
  </head>

  <body>

    <div class="container">

      <h1>My projects</h1>

      <p>Some of these are original personal projects and others projects that I have done as part of courses or that were inspired by those courses.
      </p>

      
      <hr>
      
      <h2>Wiki-goo</h2>
      <div class="row">
        <p><img src="images/wiki-goo-screenshot.png" alt="screenshot" class="img-fluid">Wiki-goo is a mash up of the wikipedia and google maps APIs. Given an address it returns a marker for that address and wikipedia articles related to that area so you can discover interesting things connected to that area.

        Bootsrap has been used for basic styling and Bootstrap Toggle toggle for sliding buttons.</p>
      </div>

        <h4>Technologies used</h4>

        <div class="row">
          <div class="col-3"></div>

          <div class="col-4 center">
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
          
          <div class="col-1"></div>
        </div>

        <div class="project-links">
          <h4>Github and live example</h4>

        <div class="row" id="icon-links">

          <div class="col">
            <a href="https://github.com/a-watkin/wiki-goo">
              <svg aria-label="screenshot" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 499.36" focusable="false"><title>GitHub</title><path d="M256 0C114.64 0 0 114.61 0 256c0 113.09 73.34 209 175.08 242.9 12.8 2.35 17.47-5.56 17.47-12.34 0-6.08-.22-22.18-.35-43.54-71.2 15.49-86.2-34.34-86.2-34.34-11.64-29.57-28.42-37.45-28.42-37.45-23.27-15.84 1.73-15.55 1.73-15.55 25.69 1.81 39.21 26.38 39.21 26.38 22.84 39.12 59.92 27.82 74.5 21.27 2.33-16.54 8.94-27.82 16.25-34.22-56.84-6.43-116.6-28.43-116.6-126.49 0-27.95 10-50.8 26.35-68.69-2.63-6.48-11.42-32.5 2.51-67.75 0 0 21.49-6.88 70.4 26.24a242.65 242.65 0 0 1 128.18 0c48.87-33.13 70.33-26.24 70.33-26.24 14 35.25 5.18 61.27 2.55 67.75 16.41 17.9 26.31 40.75 26.31 68.69 0 98.35-59.85 120-116.88 126.32 9.19 7.9 17.38 23.53 17.38 47.41 0 34.22-.31 61.83-.31 70.23 0 6.85 4.61 14.81 17.6 12.31C438.72 464.97 512 369.08 512 256.02 512 114.62 397.37 0 256 0z" fill="currentColor" fill-rule="evenodd"></path></svg>
            </a>
          </div>
          
          <div class="col">
            <a href="http://adevwatkin.com/wiki-goo/">
              <svg id="i-external" viewBox="0 0 32 32" width="32" height="32" fill="none"
                  stroke="currentcolor" 
                  stroke-linecap="round" 
                  stroke-linejoin="round" 
                  stroke-width="2">
                <path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" />
              </svg>
            </a>
            </div>
          </div>


        </div>
      <hr>


      <h2>Django To-Do list</h2>
      <div class="row">
        <img src="images/django-tdd-screenshot.png" alt="screenshot" class="img-fluid" id="image-center">
        <p>A todo list made using django and following TDD principles.

        It features custom passwordless authorisation.

        This project is me following the book TDD with Python<a href="https://www.obeythetestinggoat.com/"></a>

        Repository of that book here, by chapters<a href="https://github.com/hjwp/book-example/blob/master/README.md"></a>

        </p>
      </div>

        <h4>Technologies used</h4>

        <div class="row">
          <div class="col-3"></div>

          <div class="col-4 center">
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
          
          <div class="col-1"></div>
        </div>

        <div class="project-links">
          <h4>Github and live example</h4>

        <div class="row" id="icon-links">

          <div class="col">
            <a href="https://github.com/a-watkin/django-tdd">
              <svg aria-label="screenshot" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 499.36" focusable="false"><title>GitHub</title><path d="M256 0C114.64 0 0 114.61 0 256c0 113.09 73.34 209 175.08 242.9 12.8 2.35 17.47-5.56 17.47-12.34 0-6.08-.22-22.18-.35-43.54-71.2 15.49-86.2-34.34-86.2-34.34-11.64-29.57-28.42-37.45-28.42-37.45-23.27-15.84 1.73-15.55 1.73-15.55 25.69 1.81 39.21 26.38 39.21 26.38 22.84 39.12 59.92 27.82 74.5 21.27 2.33-16.54 8.94-27.82 16.25-34.22-56.84-6.43-116.6-28.43-116.6-126.49 0-27.95 10-50.8 26.35-68.69-2.63-6.48-11.42-32.5 2.51-67.75 0 0 21.49-6.88 70.4 26.24a242.65 242.65 0 0 1 128.18 0c48.87-33.13 70.33-26.24 70.33-26.24 14 35.25 5.18 61.27 2.55 67.75 16.41 17.9 26.31 40.75 26.31 68.69 0 98.35-59.85 120-116.88 126.32 9.19 7.9 17.38 23.53 17.38 47.41 0 34.22-.31 61.83-.31 70.23 0 6.85 4.61 14.81 17.6 12.31C438.72 464.97 512 369.08 512 256.02 512 114.62 397.37 0 256 0z" fill="currentColor" fill-rule="evenodd"></path></svg>
            </a>
          </div>
          
          <div class="col">
            <a href="http://awatkin.eu/">
              <svg id="i-external" viewBox="0 0 32 32" width="32" height="32" fill="none"
                  stroke="currentcolor" 
                  stroke-linecap="round" 
                  stroke-linejoin="round" 
                  stroke-width="2">
                <path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" />
              </svg>
            </a>
            </div>
          </div>


        </div>
      <hr>



      <h2>Presentation timer</h2>
      <div class="row">
        <p><img src="images/presentation-timer-screenshot.png" alt="screenshot" class="img-fluid">Presentation Timer is intended to help academics and other people practice presentations with strict time limits.<br><br>

        It allows for up to two warnings to be displayed visually, audibly or both at any time during the presentation. The visual warning is modeled after how academic conferences warn presenters about how much time they have remaining.<br><br>

        Requirements about the presentation process at conferences were elicited from Dr Jaana Eigi who provided valuable insights.<br><br>

        The program is written in python and uses the Tkinter interface to present a GUI to the user.<br><br>

        It has also been converted to a standalone program using py2exe.</p>
      </div>

        <h4>Technologies used</h4>

        <div class="row">
          <div class="col-3"></div>

          <div class="col-4 center">
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
          
          <div class="col-1"></div>
        </div>

        <div class="project-links">
          <h4>Github and live example</h4>

        <div class="row" id="icon-links">

          <div class="col">
            <a href="https://github.com/a-watkin/presentation-timer">
              <svg aria-label="screenshot" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 499.36" focusable="false"><title>GitHub</title><path d="M256 0C114.64 0 0 114.61 0 256c0 113.09 73.34 209 175.08 242.9 12.8 2.35 17.47-5.56 17.47-12.34 0-6.08-.22-22.18-.35-43.54-71.2 15.49-86.2-34.34-86.2-34.34-11.64-29.57-28.42-37.45-28.42-37.45-23.27-15.84 1.73-15.55 1.73-15.55 25.69 1.81 39.21 26.38 39.21 26.38 22.84 39.12 59.92 27.82 74.5 21.27 2.33-16.54 8.94-27.82 16.25-34.22-56.84-6.43-116.6-28.43-116.6-126.49 0-27.95 10-50.8 26.35-68.69-2.63-6.48-11.42-32.5 2.51-67.75 0 0 21.49-6.88 70.4 26.24a242.65 242.65 0 0 1 128.18 0c48.87-33.13 70.33-26.24 70.33-26.24 14 35.25 5.18 61.27 2.55 67.75 16.41 17.9 26.31 40.75 26.31 68.69 0 98.35-59.85 120-116.88 126.32 9.19 7.9 17.38 23.53 17.38 47.41 0 34.22-.31 61.83-.31 70.23 0 6.85 4.61 14.81 17.6 12.31C438.72 464.97 512 369.08 512 256.02 512 114.62 397.37 0 256 0z" fill="currentColor" fill-rule="evenodd"></path></svg>
            </a>
          </div>
          
          <div class="col">
            <a href="" class="disabled">
              <svg id="i-external" viewBox="0 0 32 32" width="32" height="32" fill="none"
                  stroke="currentcolor" 
                  stroke-linecap="round" 
                  stroke-linejoin="round" 
                  stroke-width="2">
                <path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" />
              </svg>
            </a>
            </div>
          </div>


        </div>
      <hr>




      <h2>Presentation timer JavaScript</h2>
      <div class="row">
        <p>Presentation Timer is a small application intended to help academics and other people practice presentations with strict time limits.

        It allows for up to two warnings to be displayed visually or audibly or both at any time during the presentation. The visual warning is modeled after how academic conferences warn presenters about how much time they have remaining.

        Requirements about the presentation process at conferences were elicited from Jaana Eigi who provided valuable insights.

        This is the JavaScript version that runs as a static single page app. </p>
      
      <img src="images/presentation-time-js-screenshot.png" alt="screenshot" class="img-fluid" id="image-center">

      </div>
        
        
        <h4>Technologies used</h4>

        <div class="row">
          <div class="col-3"></div>

          <div class="col-4 center">
            <ul id="tech-used">
              <li>Javascript</li>
              <li>jQuery</li>
            </ul>
          </div>

          
          <div class="col-4">
            <ul id="tech-used">
              <li>AngularJS 1</li>
              <li>CSS</li>
            </ul>
          </div>
          
          <div class="col-1"></div>
        </div>

        <div class="project-links">
          <h4>Github and live example</h4>

        <div class="row" id="icon-links">

          <div class="col">
            <a href="https://github.com/a-watkin/presentation-timer-js">
              <svg aria-label="screenshot" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 499.36" focusable="false"><title>GitHub</title><path d="M256 0C114.64 0 0 114.61 0 256c0 113.09 73.34 209 175.08 242.9 12.8 2.35 17.47-5.56 17.47-12.34 0-6.08-.22-22.18-.35-43.54-71.2 15.49-86.2-34.34-86.2-34.34-11.64-29.57-28.42-37.45-28.42-37.45-23.27-15.84 1.73-15.55 1.73-15.55 25.69 1.81 39.21 26.38 39.21 26.38 22.84 39.12 59.92 27.82 74.5 21.27 2.33-16.54 8.94-27.82 16.25-34.22-56.84-6.43-116.6-28.43-116.6-126.49 0-27.95 10-50.8 26.35-68.69-2.63-6.48-11.42-32.5 2.51-67.75 0 0 21.49-6.88 70.4 26.24a242.65 242.65 0 0 1 128.18 0c48.87-33.13 70.33-26.24 70.33-26.24 14 35.25 5.18 61.27 2.55 67.75 16.41 17.9 26.31 40.75 26.31 68.69 0 98.35-59.85 120-116.88 126.32 9.19 7.9 17.38 23.53 17.38 47.41 0 34.22-.31 61.83-.31 70.23 0 6.85 4.61 14.81 17.6 12.31C438.72 464.97 512 369.08 512 256.02 512 114.62 397.37 0 256 0z" fill="currentColor" fill-rule="evenodd"></path></svg>
            </a>
          </div>
          
          <div class="col">
            <a href="https://a-watkin.github.io/">
              <svg id="i-external" viewBox="0 0 32 32" width="32" height="32" fill="none"
                  stroke="currentcolor" 
                  stroke-linecap="round" 
                  stroke-linejoin="round" 
                  stroke-width="2">
                <path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" />
              </svg>
            </a>
            </div>
          </div>


        </div>
      <hr>



      <h2>Quizzer</h2>
      <div class="row">
        <p><img src="images/quizzer-screenshot.png" alt="screenshot" class="img-fluid image-right">Quizzer is a small application that reads an SQLite database of countries and then asks what the capital of a randomly chosen country is.

        It presents this in the form of a multiple choice question with one correct answer and three incorrect answers.

        The application uses Tkinter to present itself as a GUI for the user to interact with. I wrote this mainly as a small project to familiarise myself with the Tkinter interface.</p>
      </div>

        <h4>Technologies used</h4>

        <div class="row">
          <div class="col-3"></div>

          <div class="col-4 center">
            <ul id="tech-used">
              <li>Python</li>
              <li>Tkinter</li>
            </ul>
          </div>

          
          <div class="col-4">
            <ul id="tech-used">
              <li>SQLite</li>
            </ul>
          </div>
          
          <div class="col-1"></div>
        </div>

        <div class="project-links">
          <h4>Github and live example</h4>

        <div class="row" id="icon-links">

          <div class="col">
            <a href="https://github.com/a-watkin/quizzer">
              <svg aria-label="screenshot" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 499.36" focusable="false"><title>GitHub</title><path d="M256 0C114.64 0 0 114.61 0 256c0 113.09 73.34 209 175.08 242.9 12.8 2.35 17.47-5.56 17.47-12.34 0-6.08-.22-22.18-.35-43.54-71.2 15.49-86.2-34.34-86.2-34.34-11.64-29.57-28.42-37.45-28.42-37.45-23.27-15.84 1.73-15.55 1.73-15.55 25.69 1.81 39.21 26.38 39.21 26.38 22.84 39.12 59.92 27.82 74.5 21.27 2.33-16.54 8.94-27.82 16.25-34.22-56.84-6.43-116.6-28.43-116.6-126.49 0-27.95 10-50.8 26.35-68.69-2.63-6.48-11.42-32.5 2.51-67.75 0 0 21.49-6.88 70.4 26.24a242.65 242.65 0 0 1 128.18 0c48.87-33.13 70.33-26.24 70.33-26.24 14 35.25 5.18 61.27 2.55 67.75 16.41 17.9 26.31 40.75 26.31 68.69 0 98.35-59.85 120-116.88 126.32 9.19 7.9 17.38 23.53 17.38 47.41 0 34.22-.31 61.83-.31 70.23 0 6.85 4.61 14.81 17.6 12.31C438.72 464.97 512 369.08 512 256.02 512 114.62 397.37 0 256 0z" fill="currentColor" fill-rule="evenodd"></path></svg>
            </a>
          </div>
          
          <div class="col">
            <a href="" class="disabled">
              <svg id="i-external" viewBox="0 0 32 32" width="32" height="32" fill="none"
                  stroke="currentcolor" 
                  stroke-linecap="round" 
                  stroke-linejoin="round" 
                  stroke-width="2">
                <path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" />
              </svg>
            </a>
            </div>
          </div>


        </div>
      <hr>






    </div>
  </body>
</html>