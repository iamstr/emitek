<?php include("includes/header.php");?>





<div class="container-fluid px-0">
    
    
    
    
    <div class="row paralax px-0 mx-0" style="

    /* Set a specific height */
    min-height: 500px;
    background-image:url('images/garden_care.png');

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover; 
                   position:relative; ">
                   
                  
</div>
    
    
    <div class="container">
    <div class="row my-5">
                      
                       <div class="col-md-6" style="">
                                      <h1 class="h1 text-center" style="font-family:'Open Sans Condensed',san serif;text-transform: uppercase;
    letter-spacing: 0.1em;
    margin-bottom: 2rem; font-size: 2.05rem;
    font-weight: 700;
    line-height: 1.1;color: #3265b9;" id="home">Home Cleaning Services</h1> 
    
                                  <ul class="list-group pl-4" >
                                      <li class="list-group-item" >Cras justo odio</li>
                                      <li class="list-group-item ">Dapibus ac facilisis in</li>
                                      <li class="list-group-item ">Morbi leo risus</li>
                                      <li class="list-group-item ">Porta ac consectetur ac</li>
                                      <li class="list-group-item ">Vestibulum at eros</li>
                                      
                                      <li class="list-group-item py-5 "><div class="mx-auto" style="width:200px;">
                                          
                                          <a class="btn btn-danger btn-lg" href="#qoute">Get A Free  Qoute</a>
                                      </div></li>
                                    </ul>

                       </div>
                       <div class="col-md-6">
                           
                           
                            <h1 class="h1 text-center" style="font-family:'Open Sans Condensed',san serif;text-transform: uppercase;
    
    margin-bottom: 2rem; font-size: 2.05rem;
    font-weight: 700;
    line-height: 1.1;color: #3265b9;" id="home">Commercial Cleaning Services</h1> 
    
                           
                           <ul class="list-group pl-4">
                                      <li class="list-group-item">Cras justo odio</li>
                                      <li class="list-group-item">Dapibus ac facilisis in</li>
                                      <li class="list-group-item">Morbi leo risus</li>
                                      <li class="list-group-item">Porta ac consectetur ac</li>
                                      <li class="list-group-item">Vestibulum at eros</li>
                                       <li class="list-group-item py-5 "><div class="mx-auto" style="width:200px;"><a class="btn btn-danger btn-lg" href="#qoute">Get A Free  Qoute</a></div></li>
                                      
                                      
                                    </ul>
                           
                           
                       </div>
                   </div> 
                   
                   
                   
                   
                   
                   <div class="container">
                       
                       
                       
                       
                       <div class="mx-auto">
               
               
               
                   
                   
                  
              <h6 class="text-uppercase  text-center h1" id="qoute">Ask for a quotation</h6>
              <form action="vendor/send-qoute.php" method="post">
              <div class="form-group"><input type="text" placeholder="Enter your full name" name="qoute-name" class="form-control" required></div>
              <div class="form-group" ><input type="email" placeholder="Enter your email" name="qoute-email" required class="form-control" required></div>
              <div class="form-group"><input type="tel" required placeholder="Enter your phone number" name="qoute-number" class="form-control" required></div>
              <div class="form-group"><input type="text" placeholder="Enter your county" name="qoute-county" class="form-control" required></div>
                  <div class="form-group mx-auto" style="width:200px;"><button type="submit" name="quote" class=" btn btn-lg btn-danger " >Submit</button></div>
              </form>
              
              
             
           
            
             
           </div>
                   </div>
                   
                   
                   
                   
                   
                   
                   </div>
    
    
    
</div>
























<?php include("includes/footer.php");?>