<!--<video src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1328554/intro.mp4" autoplay loop playsinline muted></video> -->
    <div class="nav">

<div class="nav-wrapper">
  <div class="grad-bar"></div>
  <nav class="navbar">
    <img src="images/logo-alma-back.png">
    <div class="menu-toggle" id="mobile-menu">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
    <ul class="nav no-search n">
      <li class="nav-item"><a href="index.php">Home</a></li>
      <li class="nav-item"><a href="aboutus.php">concept</a></li>
      <li class="nav-item"><a href="gallary.php">gallary</a></li>
      <li class="nav-item"><a href="fq.php">F@Q</a></li>
      <li class="nav-item"><a href="contactus.php">contactus</a></li>
  
  </nav>

  </div>


    </div>

    <div class="jumbotron">
      <div id="black">
 <video poster=""  autoplay loop playsinline muted>
   <source src="images/video_2021-08-21_00-06-18.mp4" type="">

 </video>  
      </div>
      
      <div class="container">
        
        <h1>ALMA GROUP </h1>
        <p>is the authorized distributor of SWINCAR in the Middle East</p>
        <p>SWINCAR is the innovative all-terrain electric vehicle</p>
      </div>
    </div>
  </div>
    <script type="text/javascript">
    $("#search-icon").click(function() {
  $(".nav").toggleClass("search");
  $(".nav").toggleClass("no-search");
  $(".search-input").toggleClass("search-active");
});

$('.menu-toggle').click(function(){
   $(".nav").toggleClass("mobile-nav");
   $(this).toggleClass("is-active");
});
  </script>
  <style type="text/css">
    video {
  position: absolute;
  right: 0;
  bottom: 0;
  width: auto;
  min-width: 100%;
  height: auto;
  min-height: 100%;
  background: #000;
  background-size: cover;
  filter: grayscale(100%);
}

.jumbotron {
  height: 500px;
  position: relative;
}

.jumbotron .container {
  position: relative;
  top: 100px;
}

.jumbotron h1 {
  color: #fff !important;
  font-size: 48px;  
  font-family: 'Shift', sans-serif;
  font-weight: bold;
}

.jumbotron p {
  font-size: 20px;
  color: #fff;
}


.container img{
  height: 50px;
}

.nav {
  position: relative;
  width: 100%;
  
  height: 45px;
  z-index: 200;
}
h1, p {
  color: #fff;
  text-align: center;
  line-height: 1.4;
}

h1 {
  font-size: 2.2rem;
}

h2 {
  color: #000;
  font-size: 1.3rem;
  text-align: center;
  line-height: 1.4;
  margin-bottom: 10px;
}

/* BASIC SETUP */
.nav-wrapper {
  width: 100%;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
  
}

.grad-bar {
  width: 100%;
  height: 5px;
  background: linear-gradient(-45deg, #a80d0d,  #f2bfbf,#918c8c, #0a0a0a);
  background-size: 400% 400%;
    -webkit-animation: gradbar 15s ease infinite;
  -moz-animation: gradbar 15s ease infinite;
  animation: gradbar 15s ease infinite;
}

/* NAVIGATION */

.navbar {
  display: grid;
  grid-template-columns: 1fr 3fr;
  align-items: center;
  height: 70px;
  overflow: hidden;
  background-color: rgba(0, 0, 0, 0.01);

  z-index: 200;
}

.navbar img {
  height: 50px;
  width: 250px;
  justify-self: start;
  margin-left: 20px;
}

.navbar ul {
  list-style: none;
  display: grid;
  grid-template-columns: repeat(6,1fr);
  justify-self: end;
  
}


.nav-item a {
  color: #000;
  font-size: 0.9rem;
  font-weight: 400;
  text-decoration: none;
  transition: color 0.3s ease-out;
  color: #fff;
}

.nav-item a:hover {
  color: #e60000;
}
/* SEARCH FUNCTION */

#search-icon {
  font-size: 0.9rem;
  margin-top: 3px;
  margin-left: 15px;
  transition: color 0.3s ease-out;
}

#search-icon:hover {
  color: #e60000;
  cursor: pointer;
}

.search {
  transform: translate(-35%);
  -webkit-transform: translate(-35%);
  transition: transform 0.7s ease-in-out;
  color: #e60000;
}

.no-search {
  transform: translate(0);
  transition: transform 0.7s ease-in-out;
}

.search-input {
  position: absolute;
  top: -4px;
  right: -125px;
  opacity: 0;
  z-index: -1;
  transition: opacity 0.6s ease;
}

.search-active {
  opacity: 1;
  z-index: 0;
}

input {
  border: 0;
  border-left: 1px solid #ccc;
  border-radius: 0; /* FOR SAFARI */
  outline: 0;
  padding: 5px;
}

/* MOBILE MENU & ANIMATION */

.menu-toggle .bar{
  width: 25px;
  height: 3px;
  background-color: #fff;
  margin: 5px auto;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.menu-toggle {
  justify-self: end;
  margin-right: 25px;
  display: none;
}

.menu-toggle:hover{
  cursor: pointer;
}

#mobile-menu.is-active .bar:nth-child(2){
  opacity: 0;
}

#mobile-menu.is-active .bar:nth-child(1){
  -webkit-transform: translateY(8px) rotate(45deg);
  -ms-transform: translateY(8px) rotate(45deg);
  -o-transform: translateY(8px) rotate(45deg);
  transform: translateY(8px) rotate(45deg);
}

#mobile-menu.is-active .bar:nth-child(3){
  -webkit-transform: translateY(-8px) rotate(-45deg);
  -ms-transform: translateY(-8px) rotate(-45deg);
  -o-transform: translateY(-8px) rotate(-45deg);
  transform: translateY(-8px) rotate(-45deg);
}

/* KEYFRAME ANIMATIONS */

@-webkit-keyframes gradbar {
  0% {
    background-position: 0% 50%
  }
  50% {
    background-position: 100% 50%
  }
  100% {
    background-position: 0% 50%
  }
}

@-moz-keyframes gradbar {
  0% {
    background-position: 0% 50%
  }
  50% {
    background-position: 100% 50%
  }
  100% {
    background-position: 0% 50%
  }
}

@keyframes gradbar {
  0% {
    background-position: 0% 50%
  }
  50% {
    background-position: 100% 50%
  }
  100% {
    background-position: 0% 50%
  }
}

/* Media Queries */

  /* Mobile Devices - Phones/Tablets */

@media only screen and (max-width: 720px) { 
  
  /* MOBILE HEADINGS */
  
  h1 {
    font-size: 1.9rem;
  }
  
  h2 {
    font-size: 1rem;
  }
  
  p {
    font-size: 0.8rem;
  }
  
  /* MOBILE NAVIGATION */
     
  .navbar ul {
    display: flex;
    flex-direction: column;
    position: fixed;
    justify-content: start;
    top: 80px;
    background-color: #1a1717;
    width: 100%;
    height: calc(100vh - 55px);
    transform: translate(-101%);
    text-align: center;
    overflow: hidden;

  }
  
  .navbar li {
    padding: 15px;

  }
  
  .navbar li:first-child {
    margin-top: 50px;
  }
  
  .navbar li a {
    font-size: 1rem;
    color: #fffafa;
  }
   
  .menu-toggle, .bar {
    display: block;
    cursor: pointer;
  }
  
  .mobile-nav {
  transform: translate(0%)!important;
}
  
  
  
  /* SEARCH DISABLED ON MOBILE */
  
  #search-icon {
    display: none;
  }
  
  .search-input {
  display: none;
 }
  
}


</style>
