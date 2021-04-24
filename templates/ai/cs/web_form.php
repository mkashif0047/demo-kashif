<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="design_1.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
        <title>project</title>
        
    </head>
    
    
    
    <body>
        
     <div class="cont">
         <form method = "post" action="user_info.php">
              
                 <div class="login_text"><br>
                   Login Here
                  </div>
           
              
             
            <div class="data">
                 <div class = "icon">
                <i class = "fa fa-user icon"></i>
                <input id="F_Name" type="text"placeholder="First Name" name="F_Name" required>
                </div>
            </div>
             
            <div class="data">
                 <div class = "icon">
                <i class = "fa fa-user icon"></i>
                <input id="L_Name"type="text"placeholder="Father_Name" name="L_Name" required>
                </div>
            </div>
             
             <div class="data">
                  <div class = "icon">
                <i class = "fa fa-id-card icon"></i>
                <input id="Password" type="text"placeholder="CNIC" name="CNIC" required>
                 </div>
            </div>
             
             <div class="data">
                   <div class = "icon">
                <i class = "fa fa-phone icon"></i>
                <input id="Phone_Number" type="text"placeholder="Phone Number" name="Phone_Number" required>
                 </div>
             </div>
             
              <div class="data">
                    <div class = "icon">
                <i class = "fa fa-map-marker icon"></i>
                <input id="Address" type="text"placeholder="Address" name="Address" required>
                  </div>
             </div>
             
             <div class="data">
                   <div class = "icon">
                <i class = "fa fa-globe icon"></i>
                <input id="City" type="text"placeholder="City" name="City" required>
                 </div>
             </div>
             
             <div class="data">
                   <div class = "icon">
                <i class = "fa fa-envelope icon"></i>
                <input id="Email"type="text"placeholder="Email" name="Email" required>
                 </div>
            </div>
             <div >
                <input class="btn" type="submit"value="Submit">
            </div>
         </form>
         
        
        
     </div>
        
        
        
        
    </body>
</html>