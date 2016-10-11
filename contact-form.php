<!DOCTYPE html>
<html lang="en">

<head>
    <title>QuadX 6299</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="css/stylesheet.min.css" rel="stylesheet" type="text/css" />
    <link href="css/materialize.min.css" rel="stylesheet" type="text/css" />
    <link href="css/socicon.css" rel="stylesheet" type="text/css" />
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="php/styles.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Teko" rel="stylesheet">
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
            <li class="logo">
                <a id="logo-container" href="index.html" class="brand-logo"></a>
            </li>
            <li class="no-padding">
                <!--Tabs under "Team"!-->
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <div class="collapsible-header"><a href="#" div class="collapsible-header waves-effect waves-yellow">The Team</a></div>
                        <div class="collapsible-body">
                            <ul>
                                <li class="bold"><a href="about-team.html" class="waves-effect waves-yellow">Our Members</a></li>
                                <li class="bold"><a href="history.html" class="waves-effect waves-yellow">Team History</a></li>
                            </ul>
                    </li>
                </ul>
            </li>
            <li class="bold"><a href="about-robot.html" class="waves-effect waves-yellow">Our Robot</a></li>
            <li class="bold"><a href="resource.html" class="waves-effect waves-yellow">Resources</a></li>
            <li class="bold"><a href="contact-form.php" class="waves-effect waves-yellow">Contact</a></li>
            <li class="no-padding">
                <!--Tabs under "Events"!-->
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <div class="collapsible-header"><a href="#" div class="collapsible-header waves-effect waves-yellow">Events</a></div>
                        <div class="collapsible-body">
                            <ul>
                                <li class="bold"><a href="blog.html" class="waves-effect waves-yellow">Blog</a></li>
                            </ul>
                    </li>
                </ul>
            </li>
            

        </ul>
        </li>

        </ul>
    </header>
    <div class="right-wrapper">
        <div class="container">
            <div class="contact-wrapper" id="top-margin-adjust">

                <form action="php/contact.php" method="POST">
                    <p>Name</p>
                    <input type="text" name="name">
                    <p>Email</p>
                    <input type="text" name="email">
                    <p>Message</p>
                    <textarea name="message" rows="6" cols="25"></textarea>
                    <br />
                    <input class="btn" type="submit" value="Send">
                    <input class="btn" type="reset" value="Clear" id="clear">
                </form>
                <!--<div class="row">
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
                        <button class="waves-effect waves-light btn" type="submit" value="submit" name="submit">Submit 
    <i class="ai-send"></i>
  </button>
                     </form>
                      
                </div>!-->
            </div>
        </div>
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col m8">
                        <h5>Connect with us</h5>
                        <div class="icons">
                            <ul class="inline-list">
                                <li><a href="https://github.com/jspspike/FTC6299"><span class="socicon socicon-github"></span></a></li>
                                <li><a href="https://twitter.com/6299QuadX"><span class="socicon socicon-twitter"></span></a></li>
                                <li><a href="https://www.facebook.com/ViperBots"><span class="socicon socicon-facebook"></span></li>
                      <li><a href="https://www.youtube.com/channel/UCJoZwwyXVdpSgbP6Gs8-h5w"><span class="socicon socicon-youtube"></span></a></li>
                                <li><a href="mailto:quadx6299@gmail.com"><span class="socicon socicon-mail"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col l4 m4">
                        <a href="http://www.viperbots.org/"><img id="viperbots" src="img/ViperBots.png"></a>
                        </img>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <a id="footer-link" href="https://github.com/linnealovespie/2016teamquadx/blob/master/LICENSE">All Source Code Under Mozilla Open Source Liscence</a>
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
