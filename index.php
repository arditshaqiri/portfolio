<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <title>Document</title>
   </head>
   <body >
      <!-- Left links -->
      <div class="links">
         <!-- My Github -->
         <a id = "githubLink"  href = "https://github.com/Arditt" > <img id = 'github' width = '25' height = '25' src = './assets/github.png'/></a>    
         <?php 
            $links = array('Home','About','Projects','Contact'); ?>  
         <ul id = 'ul'>
            <?php
               for($i=0;$i<count($links);$i++){
                   echo '<li class = "li" onClick = scroll_to("'.$links[$i].'")>'. $links[$i].'</li>';
                   if($i<count($links)-1) echo "<li style = 'color:#888'>|</li>";
               }
               ?>
         </ul>
         <!-- My Linkedin -->
         <a id = "githubLink"  href = "#" > <img  width = '25' height = '25' src = './assets/linkedin.png'/></a>    
      </div>
      <div class="container">
      <!-- dark-light switch -->
      <p id = "theme">Switch theme</p>
      <img id = 'dark' src = './assets/dark.png'/>
      <img id = 'light' src = './assets/light.png'/>
      <label  id="dark-change" ></label>
      <!-- Home -->
      <div id = "Home" class="Home">
         <img  src = './assets/img.png' />
         <h2>Hi, I'm Ardit</h2>
         <h1>I'm a software engineer and <br> a web developer</h1>
      </div>
      <!-- About ME -->
      <div id = 'About' class="About">
         <h1>My experiences</h1>
         <div class="about-container">
            <div class="left">
               <img src = "./assets/ko.png" width = "70"/> 
               <div id = 'line1'></div>
            </div>
            <div class="right">
               <div class="line">
                  <div class="dot"></div>
                  <div class="dot"></div>
               </div>
               <div class="data">
                  <p>October 2021</p>
                  <h3>Kosova Outsource - Interns</h3>
                  <p id = 'text'>Started working as a frontend intern on Kosova outsource , where I have new responsibilites on how to organize the job with a new structure, managing and prioritizing the product backlog.</p>
                  <p>November 2021</p>
               </div>
            </div>
         </div>
      </div>
      <!-- Skills-->
      <div class="skills">
         <h1>Some of my skills</h1>
         <div class="skills-container">
            <div class="rectangle">
               <p>Backend</p>
               <div id = 'skill' class="skill" 
                  style = "top:-40%;left:-30%;border-bottom-right-radius:10px;">
                  <img src = "./assets/laravel.png"/>
               </div>
               <div class="skill" 
                  style = "bottom:-40%;right:-30%;border-top-left-radius:0px;">
                  <img src = "./assets/php.png"/>
               </div>
            </div>
            <div class="rectangle">
               <p>Frontend</p>
               <div class="skill" 
                  style = "top:-40%;left:-30%;border-bottom-right-radius:10px;">
                  <img src = "./assets/vue.png"/>
               </div>
               <div class="skill" 
                  style = "bottom:-40%;right:-30%;border-top-left-radius:0px;">
                  <img src = "./assets/htmlcss.png"/>
               </div>
            </div>
         </div>
      </div>
      <!-- Projects -->
      <div id = 'Projects' class="Projects">
         <h2>My projects</h2>
         <div class="Projects-container">
            <?php 
               $repoLinks = array("Https://www.blabla.com","Https://www.blabla.com","Https://www.blabla.com","Https://www.blabla.com","Https://www.blabla.com","Https://www.blabla.com");
               $repoNames = array("Name 1","Name 2","Name 3","Name 4","Name 5","Name 6");
               $repoTitles = array("Title 1","Title 2","Title 3","Title 4","Title 5","Title 6");
               $repoTech = array("js","android","html-css","Laravel","Android Java","React JS");
               
               for($i=0;$i<count($repoLinks);$i++){
                   echo "
                   <div class = 'block'>
                       <div class = 'link'>
                           <img src = './assets/repoIcon.png'/>
                           <a href = '$repoLinks[$i]'>$repoNames[$i]</a>
                       </div>
                       <p id = 'title'>$repoTitles[$i]</p>
               
                       <p id = 'repoTech'>$repoTech[$i]</p>
                   </div>
                   ";
               }
               ?>
         </div>
      </div>
      <!-- Projects -->
      <div id = 'Contact' class="Contact">
         <p>Get in touch</p>
         <h1>Contact Me</h1>
         <div class="container">
            <div class="left">
               <div class='contact-item'>
                  <img src = './assets/email.png' width = '25' height = '25'/>
                  <p class='text' >Email</p>
                  <a  href={`mailto:arditshaqiri97@gmail.com`}>Send a email</a>
               </div>
               <div class='contact-item'>
                  <img src = './assets/whatsapp.png' width = '25' height = '25'/>
                  <p class='text' >Whatsapp</p>
                  <a href="https://api.whatsapp.com/send?phone=12345678">Send a message</a>
               </div>
               <div class='contact-item'>
                  <img src = './assets/phone.png' width = '25' height = '25'/>
                  <p class='text' >Phone</p>
                  <p>04******</p>
               </div>
            </div>
            <div class="right">
               <input type = 'text' placeholder  = 'Enter your name '/>
               <input type = 'email' placeholder  = 'Enter your email'/>
               <textarea   cols="30" rows="8" placeholder = 'Enter your message...'></textarea>
               <button>Send Message</button>
            </div>
         </div>
         <h1>Social networks</h1>
         <div class="SN">
            <a href="#"><img src = './assets/linkedin2.png' width = '30' height = '30'/></a>
            <a href="#"><img src = './assets/facebook.png' width = '30' height = '30'/></a>
            <a href="#"><img src = './assets/twitter.png' width = '30' height = '30'/></a>
         </div>
      </div>
   </body>
   <!--   Dark Mode reference https://www.youtube.com/watch?v=1BC_BN5Kzbo -->
   <script>
      var content = document.getElementsByTagName('body')[0];
      var darkMode = document.getElementById('dark-change');
      darkMode.addEventListener('click', function(){
          darkMode.classList.toggle('active');
          content.classList.toggle('light');
          let skills =   document.getElementsByClassName('skill');
          for(let i =0; i<skills.length;i++){
              skills[i].classList.toggle('light');
          }
          let rectangles =   document.getElementsByClassName('rectangle');
          for(let i =0; i<rectangles.length;i++){
            rectangles[i].classList.toggle('light');
          }
          let contactItems =   document.getElementsByClassName('contact-item');
          for(let i =0; i<contactItems.length;i++){
              contactItems[i].classList.toggle('light');
          }
          document.getElementsByClassName('right')[1].classList.toggle('light');
      })
      
      function scroll_to(div){
          document.getElementById(div).scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});    
      }
   </script>
</html>