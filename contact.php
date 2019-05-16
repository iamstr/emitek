<?php


include("includes/header.php");

?>


<div class="row paralax" style="

    /* Set a specific height */
    min-height: 500px;
    background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('images/space_planning.png');

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover; 
                   position:relative; ">

        <div class="centered">

           <div class="mx-auto">
               
               
               
                   
                   
                  
              <h6 class="text-uppercase h1" style="font-family:'Open Sans Condensed',san serif;text-transform: uppercase;
    letter-spacing: 0.1em;
    margin-bottom: 2rem; font-size: 3.05rem;
    font-weight: 700;
    line-height: 1.1; color:white;" > Emitec Cleaning service</h6>
              
              
              
             
           
            
             
           </div>



        </div>


    </div>
    
    
    
    
    
    <div class="row text-center py-5 " style="background-color:#f5f5f5;color:#3e65b9;padding:0px; ">
    <h1 class="h1 mx-auto " style="font-family:'Open Sans Condensed',san serif;text-transform: uppercase;
    letter-spacing: 0.1em;
    margin-bottom: 2rem; font-size: 4.05rem;
    font-weight: 700;
    line-height: 1.1;">Reach Us</h1>
    </div>


<div class="row" id="contatti">
<div class="container mt-5" >

    <div class="row" style="height:550px;">
      <div class="col-md-6 maps" >
         
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8181261692444!2d36.81896611473147!3d-1.282957599064252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d43d02b173%3A0x9ba3afe55e2a11ee!2sTakaful+Insurance+Of+Africa!5e0!3m2!1sen!2ske!4v1537385344872" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-md-6">
        <h2 class="text-uppercase mt-3 font-weight-bold " style="font-family:'Open Sans Condensed',san serif; color: #3e65b9;">Contact us</h2>
        <form action="vendor/send.php" method="post">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="Name" required name="contact-name">
              </div>
            </div>
            
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="Subject" name="contact-subject" required>
              </div>
            </div>
            
            <div class="col-lg-6">
              <div class="form-group">
                <input type="tel" class="form-control mt-2" placeholder="Mobile number" name="contact-number">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="email" class="form-control mt-2" placeholder="Email" name="contact-email" required>
              </div>
            </div>
            
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="3" required name="contact-content"></textarea>
              </div>
            </div>
            
            <div class="col-12">
              <button class="btn btn-light" type="submit" name="contact">Submit</button>
            </div>
          </div>
        </form>
        <div class="" style="color: #3e65b9;">
        <h2 class="text-uppercase mt-4 font-weight-bold" style="font-family:'Open Sans Condensed',san serif;color: #3e65b9;">Our contact details</h2>

        <i data-feather="phone" class="my-3 ml-2" style="color: #3e65b9;"></i> <a href="tel:+"  style="color: #3e65b9;">+254 720699969 or +254 721338098</a><br>
        
        <i data-feather="mail" class="my-3 ml-2" style="color: #3e65b9;"></i> <a href="" class="pb-3" style="color: #3e65b9;">info@test.it</a><br>
        <i data-feather="compass" class="my-3 ml-2"></i> 3rd Floor, CIC Plaza, Mara Road, Upper Hill, Nairobi<br>
        
        <div class="my-4" style="color: #3e65b9;">
        <a href="" class="d-inline " style="color: #3e65b9;"><i data-feather="facebook" style="color: #3e65b9;"></i> EmitecKE</a>
        <a href="" class="d-inline ml-5" style="color: #3e65b9;"><i data-feather="linkedin" style="color: #3e65b9;"></i> EmitecKE</a>
        </div>
        </div>
      </div>

    </div>
</div>
</div>





<style>
    
    
    
    #contatti{
  background-color: white;
  letter-spacing: 2px;
  }
#contatti a{
  color: black;
  text-decoration: none;
}


@media (max-width: 575.98px) {

  #contatti{padding-bottom: 800px;}
  #contatti .maps iframe{
    width: 100%;
    height: 450px;
  }
 }


@media (min-width: 576px) {

   #contatti{padding-bottom: 800px;}

   #contatti .maps iframe{
     width: 100%;
     height: 450px;
   }
 }

@media (min-width: 768px) {

  #contatti{padding-bottom: 350px;}

  #contatti .maps iframe{
    width: 100%;
    height: 850px;
  }
}

@media (min-width: 992px) {
  #contatti{padding-bottom: 200px;}

   #contatti .maps iframe{
     width: 100%;
     height: 700px;
   }
}


#author a{
  color: #fff;
  text-decoration: none;
    
}
    
    
    
     .centered {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
      color: #3e65b9;
}
    
    body,html{
        overflow-x: hidden;
    }
    
</style>



















<?php


include("includes/footer.php");

?>