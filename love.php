<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Love Calculator</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Langar&display=swap"
      rel="stylesheet"
    />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link rel="stylesheet" href="style.css" />
  </head>
  
  </style>
  <body>
      <div class="container-fluid d-flex align-items-center justify-content-center flex-column">
        
        

         <div class="card ">
          
            <div class="card-body d-flex align-items-center justify-content-center flex-column ">
              <h3 class=" heading animate__animated  animate__pulse animate__infinite  text-center display-5 mb-5 text-danger font-weight-bold">LOVE YOU 💖😍</h3>
            <form class="form-inline " class="one" method="post">
              	<div class="form-group w-100 " id="res">
              	<input type="text" name="owner" placeholder="Your Name" id="name" class="form-control mb-2 mr-2 text-uppercase" autocomplete="off">
              	<span class="" id="heart">💕</span>
                <input type="text" name="user" placeholder="Your Name" id="lname" class="form-control mb-2 mt-1  text-uppercase" autocomplete="off">

                </div>
                 <div class="bttn">
                 <button class="btn btn-outline-danger mt-5 text-uppercase" onclick="love()" name="submit" type="submit">Calculate 💝</button>
                 </div>
                
            </form>

           
                 
                  
                   <form class="form-group" id="res">
                    <input type="text" placeholder="Love percentage" class="form-control mt-5 text-center" id="lovevalue">
                 </form>
               </div>
               
               <div class="card-footer text-center font-weight-bold text-danger   animate__animated  animate__zoomInRight animate__delay-1s animate__infinite animate__slow">ALWAYS BE TOGETHER 😍</div>
            </div>
          </div>
        
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      <script>

        document.getElementById("lovevalue").style.visibility="hidden";
        const love = ()=>{


        const name=document.getElementById("name").value;
        const lname=document.getElementById("lname").value;
        
        

        if(name==""){
          alert("Please Enter your Name");
        }
        else if(name.length <=2){
          alert("Please Enter the valid Name");
        }
        else if(!isNaN(name)){
          alert("Sorry Numbers are prohibited");
        }
        

        if(lname==""){
          alert("Please Enter your Name");
        }
        else if(lname.length <=2){
          alert("Please Enter the valid Name");
        }
        else if(!isNaN(lname)){
          alert("Sorry Numbers are prohibited");
        }




        document.getElementById("lovevalue").style.visibility="visible";
        var lovedata= Math.random() * 100;
        lovedata=Math.floor(lovedata);
        document.getElementById("lovevalue").value=lovedata + "%";
        }
      </script>

  </body>
 

</html>

<?php

include 'connection.php' ;

if(isset($_POST['submit']))
{


   $myname=$_POST['owner'];
   $yourname=$_POST['user'];



$inputquery="insert into contact(myname,yourname) values('$myname','$yourname')";

$res=mysqli_query($con,$inputquery);

if($res)
{
    ?>
    <script>
    alert( "Data inserted successfully");
    </script>
    
    <?php
}

else{


     ?>
    
   <script>
   alert( "Data not inserted");
   </script>
   <?php
}


}


?>


