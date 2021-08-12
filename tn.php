<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.trpentertainment.com/mpcg by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Aug 2021 04:08:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./stylesheets/style.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    
  
  <style>
       .swiper-container {
           width: 100%;
           height: 100%;

          }
          
    .swiper-slide {
        position: relative;
      text-align: center;
      font-size: 18px;
      background: linear-gradient(to right , rgb(232, 236, 236) ,rgb(224, 220, 221));
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
    img{
      width: 100%;
      height: 100%;
      object-fit: cover;
      background-position: center;
       background-size: cover;
    }


    @media only screen and (max-width: 600px){
      
    }


  </style>
 <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!-- Swiper -->
  <div class="swiper-container laptop">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img alt="sliderimage1" id="image1" src="images/image8.png" /></div>
      <div class="swiper-slide"><img alt="sliderimage1" src="images/image9.png" /></div>
      <div class="swiper-slide"><img alt="sliderimage1" src="images/image10.png" /></div>
      <div class="swiper-slide"><img alt="sliderimage1" src="images/image11.png" /></div>

    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  <div class="swiper-container mobile">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img alt="sliderimage1" id="image1" src="images/mobile8.jpg" /></div>
      <div class="swiper-slide"><img alt="sliderimage1" id="image1" src="images/mobile5.jpg" /></div>
      <div class="swiper-slide"><img alt="sliderimage1" id="image1" src="images/mobile6.jpg" /></div>
      <div class="swiper-slide"><img alt="sliderimage1" id="image1" src="images/mobile7.jpg" /></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
   <!-- Swiper JS -->

   <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  
   <script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>

    <h4 >Kindly share your details. Our team will connect to share Exclusive Offers. </h4>
     <div class="container ">
      <form method="POST" action="tn_Query.php" onsubmit=" return validation()">
       <div class="mb-3">
        <input name="name" type="text" class="form-control" id="name" placeholder="Enter Your Name" >
        <span id="username"  class="text-danger font-weight-bold"></span> <!-- this span tag is used to javascript validation text show -->
       </div>
       <div class="mb-3">
        <p id="error"></p>
        <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter Your Mobile Number" >
        <span id="mobileno" class="text-danger font-weight-bold"></span>
        </div>
         <div class="mb-3">
        <input type="text" name="address" class="form-control" id="address" placeholder="Enter Your City Name">
        <span id="addres" class="text-danger font-weight-bold"></span>
        </div>
         <div class="mb-3">
         <select name="product" id="product" style="width: 100%; height: 40px;" class="form-select" >
          <option value="null" selected>--Select Products--</option>
          <option value="Air Conditioner">Air Conditoner</option>
          <option value="Air Purifier">Air Purifier</option>
          <option value="Ceiling Fan">Ceiling Fan</option>
          <option value="DishWaher">Dishwasher</option>
          <option value="Refrigerator">Refrigerator</option>
          <option value="LED TV">LED Tv</option>
          <option value="Microwave Oven">Microwave Oven</option>
          <option value="Washing Machine">Washing Machine</option>
          <option value="Water Purifier">Water Purifier</option>
          <option value="Boom Music System">Xboom Music System</option>
          <option value="Wireless Buds">Wireless Buds</option>
        </select>
        <span id="products" class="text-danger font-weight-bold"></span>
      </div>
     <div  class="mb-3 flexcontainer">
     <button type="submit" name="submit" class="btn btn-dark">Submit</button>
     <!-- <button type="button" type= "submit" name="submit" >Submit</button> -->
      <a href="tn.php"> Reset</a>
     </div>
    </form>
  </div>
 
  <script type="text/javascript">
    /* this is for form validation entered by the user  */
    function validation() {
  var user=document.getElementById('name').value;
  var mob=document.getElementById('mobile').value;
  var add=document.getElementById('address').value;
  var prod=document.getElementById('product').value;  
if(user=="")
{
  document.getElementById('username').innerHTML="please enter your name";
  return false;
}else{
   document.getElementById('username').innerHTML="";
}


 if ((user.length <= 2) || (user.length > 30)) {
   document.getElementById('username').innerHTML="user name must be between 2 to 30 characters";
   return false;
 }else{
   document.getElementById('username').innerHTML="";
}

 if(!isNaN(user)){
        document.getElementById('username').innerHTML =" ** only characters are allowed";
        return false;
      }else{
   document.getElementById('username').innerHTML="";
}

if(mob == ""){
        document.getElementById('mobileno').innerHTML =" ** Please fill the mobile Number field";
        return false;
      }else{
   document.getElementById('mobileno').innerHTML="";
}

if(isNaN(mob)){
        document.getElementById('mobileno').innerHTML =" ** user must write digits only not characters";
        return false;
      }else{
   document.getElementById('mobileno').innerHTML="";
}
if((mob.length<10)|| (mob.length>13)){
        document.getElementById('mobileno').innerHTML =" ** Mobile Number must be 10 digits only";
        return false;
      }else{
   document.getElementById('mobileno').innerHTML="";
}
if(add==""){
        document.getElementById('addres').innerHTML="please enter your address";
        return false;
}else{
   document.getElementById('addres').innerHTML="";
}
if(add.length<3){

      document.getElementById('addres').innerHTML =" ** city name must be minimum. 3 characters";
      return false;
      }else{
   document.getElementById('addres').innerHTML="";
}
if(prod=="null"){
        document.getElementById('products').innerHTML="please select the product from the list";
        return false;
}else{
   document.getElementById('products').innerHTML="";
}

    }



  </script>
<div class="footer-margin"></div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

<!-- Mirrored from www.trpentertainment.com/mpcg by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Aug 2021 04:09:47 GMT -->
</html>