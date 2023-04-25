 <nav class="navbar navbar-expand-lg navbar-light style-1">
     <div class="container">
         <a class="navbar-brand" href="./">
             <img src="img/logo-black.png" width="110" alt="">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                     <a class="nav-link <?php print @$active1;?>" href="./">
                         Home
                     </a>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle  <?php print @$active2;?>" href="#" id="navbarDropdown2" role="button"
                         data-bs-toggle="dropdown" aria-expanded="false">
                         About
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                         <li><a class="dropdown-item" href="about">About</a></li>
                         <li><a class="dropdown-item" href="team">Team</a></li>
                         <li><a class="dropdown-item" href="projects">Projects</a></li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link <?php print @$active3;?>" href="community">
                         Community
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link <?php print @$active4;?>" href="volunteers">
                         Volunteers
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link <?php print @$active5;?>" href="contact">
                         contact
                     </a>
                 </li>
             </ul>
             <div class="nav-side">
                 <div class="hotline pe-4">
                     <div class="icon me-3">
                         <i class="bi bi-telephone"></i>
                     </div>
                     <div class="cont">
                         <small class="text-muted m-0">WhatsApp 24/7</small>
                         <h6><a href="https://web.whatsapp.com/send?phone=<?php print $siteWhatsApp; ?>"><?php print $sitePhone; ?></a>
                         </h6>
                     </div>
                 </div>
                 <div class="qoute-nav ps-4">

                     <a href="donate" class="btn sm-butn butn-gard border-0 text-white">
                         <span>Donate</span>
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </nav>