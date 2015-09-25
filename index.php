<!-- @uth0r ps48-->

<html>
  <head>

    <title> Genre-ist  </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <script src="./js/jquery-2.1.3.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <!-- wavesurfer.js -->
    <script src="./js/wavesurfer.js"></script>
    <script src="./js/webaudio.js"></script>
    <script src="./js/mediaelement.js"></script>
    <script src="./js/drawer.js"></script>
    <script src="./js/drawer.canvas.js"></script>

    <script src="./js/main.js"></script>
    <script src="./js/trivia.js"></script>
    <script src="./js/script.js"></script>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/mycss.css" />

   
  
  </head>
  <body>
     <div class="container-fluid col-lg-12" id="home" >
         <div class="headcnt">
              <div class="row">
                <h1 class="rl wh">Genre<span class="rb lblue">-ist</span></h1>
              </div>
          </div>

        <div class="row spacer">
           <div class="span4">...</div>
        </div>
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
              <div class="navbar-header">
                    <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="rb wh center">Menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                    </button>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav col-lg-12 rl wh center">
                    <li class="bf col-lg-3 col-md-3"><a class="scroll" target="div2">Check My Genre</a></li>
                    <li class="bf col-lg-3 col-md-3"><a class="scroll" target="div3">Database</a></li>
                    <li class="bf col-lg-3 col-md-3"><a class="scroll" target="div4">How it works?</a></li>
                    <li class="bf col-lg-3 col-md-3"><a class="scroll" target="div5">About</a></li>
                  </ul>
              </div>
          </div>
        </nav>


        <div class="row spacer">
           <div class="span4">...</div>
           <div class="span4">...</div>
        </div>

        <div class="row icons center">
          <div class=" col-lg-4 col-md-4 col-sm-4 ">
            <div class="smspacer"></div><image src="./images/database.png"  ></img>
          </div>
          <div class=" col-lg-4 col-md-4 col-sm-4 wh rb "></div>
          <div class=" col-lg-4 col-md-4 col-sm-4 ">
            <div class="smspacer"></div><image src="./images/cloud.png"></img>
          </div>
        </div>

        <div class="row spacer"></div>

        <div class="row icons center">
          <div class=" col-lg-4 wh rb ring"><h2>Accuracy : 70%</h2></div>
          <div class=" col-lg-4 wh rb "></div>
          <div class=" col-lg-4 wh rb ring"><h2>Total Queries: 756</h2></div>
        </div>


      <div class="smspacer">
        <div class="row">
          <div class="col-lg-11 col-md-11 col-sm-11"> </div>
          <div class="col-lg-1 col-md-1 col-sm-1">
                <a href="#" class="scrollToTop"></a>
          </div>
        </div>
      </div>

      <div class="smspacer"></div>
      <div class="smspacer"></div>
      <div class="smspacer"></div>
    </div>

    <div class="wh rl container-fluid col-lg-12" id="div2">
      <div class="container-fluid col-lg-12" id="ind2">
        <div class="container">
          <div class="row spacer"></div>
          <div class="bf col-lg-12 center">Check My Genre</div>
          <div class="row spacer"></div>
          <div class="row spacer"></div>
              <div id="demo">
                  <div id="waveform">
                      <div class="progress progress-striped active" id="progress-bar">
                          <div class="progress-bar progress-bar-info"></div>
                      </div>
                      <!-- Here be the waveform -->
                  </div>

                  <div class="controls">
                      <button class="btn btn-primary" data-action="back">
                          <i class="glyphicon glyphicon-step-backward"></i>
                          Backward
                      </button>

                      <button class="btn btn-primary" data-action="play">
                          <i class="glyphicon glyphicon-play"></i>
                          Play
                          /
                          <i class="glyphicon glyphicon-pause"></i>
                          Pause
                      </button>

                      <button class="btn btn-primary" data-action="forth">
                          <i class="glyphicon glyphicon-step-forward"></i>
                          Forward
                      </button>

                      <button class="btn btn-primary" data-action="toggle-mute">
                          <i class="glyphicon glyphicon-volume-off"></i>
                          Toggle Mute
                      </button>
                  </div>
              </div>

              <div class="row spacer"></div>

              <p class="lead pull-center" id="drop">
                  Drag'n'drop your favorite
                  <i class="glyphicon glyphicon-music"></i>-file
                  here!
              </p>

               <form action="php/upload.php" method="post" enctype="multipart/form-data" style="text-align:center;">
                 <div class="row spacer"></div>


                <?php

                    if(isset($_GET['genre']))
                    {
                      echo" <div class='row spacer'></div> <div><h2>The Genre is : ".$_GET['genre']."<h2></div> ";
                    }
                    else
                    {
                      echo"<h2> Select your Song </h2><div class='row spacer'></div>
                          <input class='btn btn-info' type='file' name='fileToUpload' id='fileToUpload' style='width:100%;' >
                             <div class='row spacer'></div>
                          <input type='submit' value='Upload File' name='submit' class='btn btn-primary' style='width:100%;'>";
                    }

                  ?>

                
              </form>

        <div class="row spacer"></div>
        <div class="row spacer"></div>

      </div>
    </div>
    </div>
    </div>

    <div class="wh rl center container-fluid col-lg-12" id="div3">

      <div class="row spacer"></div>
      <div class="bf col-lg-12 center">Database</div>
      <div class="row spacer"></div>
      <div class="row spacer"></div>
      <div class="row spacer"></div>

          <div class="col-lg-1 col-md-0 col-sm-0">
          </div>

          <div class="col-lg-3 col-md-4 col-sm-4">

            <button type="button" class="btn btn-primary btn-block btnclk" id="mr">Rock</button>
            <button type="button" class="btn btn-primary btn-block btnclk" id="mp">Pop</button>
            <button type="button" class="btn btn-primary btn-block btnclk" id="mh">Hip-hop</button>
            <button type="button" class="btn btn-primary btn-block btnclk" id="mj">Jazz</button>
            <button type="button" class="btn btn-primary btn-block btnclk" id="md">Dubstep</button>
            <button type="button" class="btn btn-primary btn-block btnclk" id="mc">Classical</button>

          </div>

          <div class="col-lg-2 col-md-1 col-sm-0">
          </div>

          <div class="col-lg-5 col-md-7 col-sm-8" id="dbcon">

            Click on type of genre to fetch database

          </div>

          <div class="col-lg-1 col-md-0 col-sm-0">
          </div>

      <div class="row spacer"></div>
      <div class="row spacer"></div>
      <div class="row spacer"></div>

    </div>

    <div class="wh rl center container-fluid col-lg-12" id="div4">

      <div class="row spacer"></div>
      <div class="bf col-lg-12 center">How it works?</div>

      <div class="row spacer"></div>
      <div class="row spacer"></div>

      <div class="row col-lg-12">
        <div class="col-lg-2"></div>
        <div class="con col-lg-8 ">
          The front-end of the site is made using HTML 5 elements, Wavesurfer.js
          library, Twitter-Bootstrap CSS and Js along with glyphicons package. The
          back-end of the site uses Python 3.1 along with its NumPy &amp; SciPy libraries
          to use a fuzzy logic algorithm to the given data-base and henceforth use machine
          learning in order to assimilate the patterns of a specific genre. The front end is connected
          to the back end using Php.
        </div>
        <div class="col-lg-2"></div>
      </div>

      <div class="row spacer"></div>
      <div class="row spacer"></div>
      <div class="row spacer"></div>

    </div>

    <div class="wh rl center container-fluid col-lg-12" id="div5">

      <div class="row spacer"></div>
      <div class="bf col-lg-12 center">About</div>

      <div class="row spacer"></div>
      <div class="row spacer"></div>
    
      <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2" >
          </div>

          <div class="col-lg-2 col-md-2 col-sm-2" >
            <img src="./images/ps48.jpg" class="img-circle cimg" ></img>
            <div class="smspacer"></div>
            <div class="center rl wh">Pratik Shenoy</div>
          </div>

          <div class="col-lg-1 col-md-1 col-sm-1" >
          </div>

          <div class="col-lg-2 col-md-2 col-sm-2" >
            <img src="./images/ps48.jpg" class="img-circle cimg" ></img>
            <div class="smspacer"></div>
            <div class="center rl wh">Pratik Shenoy</div>
          </div>

          <div class="col-lg-1 col-md-1 col-sm-1" >
          </div>

          <div class="col-lg-2 col-md-2 col-sm-2" >
            <img src="./images/ps48.jpg" class="img-circle cimg" ></img>
            <div class="smspacer"></div>
            <div class="center rl wh">Pratik Shenoy</div>
          </div>

          <div class="col-lg-2 col-md-2 col-sm-2" >
          </div>



        </div>

        <div class="row spacer"></div>
        <hr>
        <div class="smspacer"></div>
        <div class="smspacer"></div>
        <div class="smspacer"></div>

        <div class="rl col-lg-12">
          Copyrights reserved @ps48
        </div>
        <div class="row spacer"></div>
        <div class="smspacer"></div>
        <div class="smspacer"></div>




    </div>





  </body>




</html>
