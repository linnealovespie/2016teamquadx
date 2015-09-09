<!DOCTYPE html>
<html lang="en">

<head>
	<title>QuadX 6299</title>
	<meta charset= "utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<link href="css/stylesheet.min.css" rel="stylesheet"  type="text/css"/>
	<link href="css/materialize.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/androidicons.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/reset.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <header>
        <nav class="top-nav">
        <div class="right-wrapper">
            <div class="nav-wrapper"><a class="page-title">Contact Us<i><p>Feel free to message us, or connect via social media.</p></i></a></div>
        </div>
      </nav>
        <div><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light"><i class="medium mdi-navigation-menu"></i></a></div>
        <ul id="nav-mobile" class="side-nav fixed">
          <li class="logo"><a id="logo-container" href="index.html" class="brand-logo"></a></li>
          <li class="no-padding"><!--Tabs under "About"!-->
            <ul class="collapsible collapsible-accordion">
             <li><div class="collapsible-header"><a href="#" class="collapsible-header waves-effect waves-yellow">About</a></div>
              <div class="collapsible-body">
                <ul>
                  <li class="bold"><a href="about-team.html" class="waves-effect waves-yellow">Team</a></li>
                  <li class="bold"><a href="about-robot.html" class="waves-effect waves-yellow">Robot</a></li>
                </ul>
              </div></li>
            </ul>
          </li>
          <li class="bold"><a href="resource.html" class="waves-effect waves-yellow">Resources</a></li>
          <li class="bold"><a href="contact-form.php"class="waves-effect waves-yellow">Contact</a><li>
        <li class="no-padding"><!--Tabs under "Events"!-->
        <ul class="collapsible collapsible-accordion">
         <li><div class="collapsible-header"><a href="events.html" class="collapsible-header waves-effect waves-yellow">Events</a></div>
          <div class="collapsible-body">
            <ul>
              <li class="bold"><a href="events.html" class="waves-effect waves-yellow">Calendar</a></li>
              <li class="bold"><a href="blog.html" class="waves-effect waves-yellow">Blog</a></li>
            </ul>
          </div></li>
        </ul>
      </li>
        </ul>
    </header>
    <div class="right-wrapper">
        <div class="container">
            <div class="contact-wrapper" id="top-margin-adjust">
                 <div class="row">
                    <form class="col s12" action="php/contact.php">
                      <div class="row">
                        <div class="input-field col s6">
                          <input id="first_name" type="text" class="validate">
                          <label for="first_name">Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                              <input id="email" type="text" class="validate">
                              <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                              <textarea id="textarea1" class="materialize-textarea"></textarea>
                              <label for="textarea1">Message</label>
                            </div>
                        </div>
                        <button class="waves-effect waves-light purple btn" type="submit" value="submit" name="submit">Submit 
    <i class="ai-send"></i>
  </button>
                     </form>
                      
                </div>
            </div>
        </div>
     <footer class="page-footer">
      <div class="container">
          <div class="row">
              <div class="col m8">
                <h5>Connect with us</h5>
                <div class="icons">
                  <ul class="inline-list">
                      <li><a href="https://github.com/linnealovespie/2016teamquadx"><i class="ai-github"></i></a></li>
                      <li><a href="https://twitter.com/6299QuadX"><i class="ai-twitter"></i></a></li>
                      <li><a href="https://www.facebook.com/ViperBots"><i class="ai-facebook"></i></a></li>
                      <li><a href="https://www.youtube.com/channel/UCJoZwwyXVdpSgbP6Gs8-h5w"><i class="ai-youtube"></i></a></li>
                    
                  </ul>
                </div>
            </div>
            <div class="col l4 m4">
                <a href="http://www.viperbots.org/"><img id="viperbots" src="img/ViperBots.png"></a></img>
            </div>
        </div>
        </div>
           <div class="footer-copyright">
            <div class="container">
                <a id="footer-link" href="https://github.com/linnealovespie/2016teamquadx/blob/master/LICENSE" >All Source Code Under Mozilla Open Source Liscence</a>
                <a class="right" id="footer-link" href="http://materializecss.com/">Materialize CSS Framework</a>
            </div>
          </div>
    </footer> 
</div>         

    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/baseAnimations.js"></script>

</body>
</html>