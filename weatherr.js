$(document).ready(function(){
                
$("#submitCity").click(function(){
        return getWeather();  
          });
});                           


function getWeather(){
    var city = $("#city").val();
    
    if(city != ''){
        $.ajax({
           url:'https://api.openweathermap.org/data/2.5/weather?q=' +
            city + "&units=metric"+ "&APPID=80142a21a7d09206818cd5c8c3f1844b",
            type: "GET",
            dataType: "jsonp",
            success:function(data){
            console.log(data);
            $("#showWeather").html(showResults(data));
        }
    }); 
    }else{
        $("#error").html("<div class='alert alert-danger' id='errorCity'> <a href='#' class= 'close'data dismiss='alert' aria-label= 'close'> &times; </a>Try again please</div>");
                        
                      
    }
}

function showResults(data){
    return '<h1>Current Weather for '+data.name+', '+data.sys.country+'</h1>'+ 
       "<h4><p> The Weather currently: "+data.weather[0].main+ "</p></h4>"+
         "<h4><p> The Weather detailed: "+data.weather[0].description+ "</p></h4>"+
        "<h4><p> The Temperature at the moment: "+data.main.temp+"&deg;C</p></h4>"+
        "<h4><p> The Pressure: "+data.main.pressure+ " hpa</p></h4>"+
     "<h4><p> The Humidity: "+data.main.humidity+ "%</p></h4>"+
     "<h4><p> The Minimum Temperature of today: "+data.main.temp_min+ "&deg;C</p></h4>"+
     "<h4><p> The Maximum Temperature of today: "+data.main.temp_max+ "&deg;C</p></h4>"+
    "<h4><p> The speed of the wind: "+data.wind.speed+ "m/s</p>"+
         "<h4><p> The direction of the wind: "+data.main.temp+ "&deg;</p></h4>";
}
