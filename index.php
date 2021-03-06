
<!DOCTYPE html>
<html lang "en">
<head>
    
    <meta charset="UTF-8">
    
     
    <!--  Title -->
    <title> Weather Application  </title>
    
    <!--  CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    
    <link rel="stylesheet" href="style.css">
    
    </head>
    <body>
        <nav class="navbar navbar-default "  id="nav_bar">
 <div class ="navbar-header">
               
               <a href="#" class="navbar-brand navbar-link weather">
               
                   <strong>Amazing Weather Application made by Niatna Tesfaldet</strong> 
                   
               </a>
            
            </div> 
            
 
    
     <ul class="nav navbar-nav navbar-right" id="nav_list">
      
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Come see the weather! <span class="caret"></span></a>
        <ul class="dropdown-menu">
           <li><a href="current.html">Current Weather</a></li>
         <li><a href="https://openweathermap.org/" target="_blank">Open Weather Map</a></li>
        </ul>
      </li>
    </ul>
        </nav>

    <!--  Introduction -->
        <div class="row" id="headRow">
        <div class="col-md-12" id="colText">
           
               <img src="qr%20code.png" width= "400" heights= "400">

    <!--  Images used -->
              <script type="text/javascript">
   
    var image1=new Image()
image1.src="sun.gif" 
   
        var image2=new Image()
        image2.src="sneeuw.gif"
        
        var image3=new Image()
        image3.src="windd.gif"
        
        var image4=new Image()
        image4.src="rain.gif"
        
        var image5=new Image()
        image5.src="tempa.gif"
        
     </script>
            <img src="blad.jpg" name="slide" width="400" height="400">
        <script type="text/javascript">
        
        var step=1
        function slideit(){
            document.images.slide.src=eval("image"+step+".src")
            if(step<5)
                step++
            else
                step=1
            setTimeout("slideit()",1000)
        }slideit()
                
        </script>
            </div>
               </div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/Beyonce.jpg" width= "650" height="450"> 
            
            
     
          <h4 class="text-right" id="colHeadText1">Welcome to my weather application! The purpose of this application is to show the weather within every city in the world.  </h4>
    <!--  Copyright -->
        
      <div class="row">
            <p style= "#b30000" class="text-center"> Copyright &copy; Weather App</p>
            </div>
        
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--  JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
        
        <script src="weather.js"> </script>
        



</body>
</html>

