<?php include("includes/header.php");?>




<style>
* {
    box-sizing: border-box;
}



.row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
}

.column img {
    margin-top: 8px;
    vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
    .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
    }
}
</style>
<body>

<div class="container mb-3">
<!-- Header -->
<div class="header mx-auto" style="color: #3e65b9;">
  <h1 style="color: #3e65b9;">Emitek </h1>
  <p>This is our gallery .</p>
</div>

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="images/toilet.jpg" style="width:100%">
    
  </div>
  <div class="column">
    <img src="images/woman-bleaching.jpg" style="width:100%">
   
  </div>  
  <div class="column">
   
    <img src="images/sink-cleaning.jpg" style="width:100%">
   
   
  </div>
  <div class="column">
   
    <img src="images/floor.jpg" style="width:100%">
   
  </div>
  
  <div class="column">
   
    <img src="images/glass.jpg" style="width:100%">
   
  </div>
</div>


</div>



<?php include("includes/footer.php");?>