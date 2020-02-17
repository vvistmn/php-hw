<?php 

$data = include_once ('data.php');
$aboutData = $data['about'];
$educationData = $data['education'];
$languagesData = $data['languages'];
$lvlData = $data['lvlLanguages'];
$interestsData = $data['interests'];
$aboutCareerData = $data['aboutCareer'];
$career = $data['career'];
$projects = $data['projects'];
$skillset = $data['skillset'];

?>




<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Responsive Resume/CV Template for Developers</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body>
    <div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" src="assets/images/profile.png" alt="" />
                <h1 class="name"><?= $aboutData['name'] ?></h1>
                <h3 class="tagline"><?= $aboutData['post'] ?></h3>
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa fa-envelope"></i><a href="mailto:<?= $aboutData['email'] ?>"><?= $aboutData['email'] ?></a></li>
                    <li class="phone"><i class="fa fa-phone"></i><a href="tel:<?= $aboutData['phone'] ?>"><?= $aboutData['phone'] ?></a></li>
                    <li class="website"><i class="fa fa-globe"></i><a href="<?= $aboutData['site'] ?>" target="_blank"><?= $aboutData['site'] ?></a></li>
                    <li class="linkedin"><i class="fa fa-linkedin"></i><a href="<?= $aboutData['link'] ?>" target="_blank"><?= $aboutData['link'] ?></a></li>
                    <li class="github"><i class="fa fa-github"></i><a href="<?= $aboutData['git'] ?>" target="_blank"><?= $aboutData['git'] ?></a></li>
                    <li class="twitter"><i class="fa fa-twitter"></i><a href="<?= $aboutData['twitter'] ?>" target="_blank"><?= $aboutData['twitter'] ?></a></li>
                </ul>
            </div><!--//contact-container-->
            <div class="education-container container-block">

                <h2 class="container-block-title">Education</h2>
                <?php foreach ($educationData as $education): ?>
                <div class="item">
                    <h4 class="degree"><?= $education['faculty'] ?></h4>
                    <h5 class="meta"><?= $education['univercity'] ?></h5>
                    <div class="time"><?= $education['yearStar'] ?> - <?= $education['yearEnd'] ?></div>
                </div><!--//item-->
            <? endforeach; ?>
            </div><!--//education-container-->
            
            <div class="languages-container container-block">
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list">
                    <? foreach ($languagesData as $lang):?>
                    <li><?= $lang ?></li>
                <? endforeach; ?>
                </ul>
            </div><!--//interests-->
            
            <div class="interests-container container-block">
                <h2 class="container-block-title">Interests</h2>
                <ul class="list-unstyled interests-list">
                    <? foreach($interestsData as $int):?>
                    <li><?= $int ?></li>
                <? endforeach; ?>
                </ul>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">
            
            <section class="section summary-section">
                <h2 class="section-title"><i class="fa fa-user"></i>Career Profile</h2>
                <div class="summary">
                    <p><?= $aboutCareerData ?></p>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class="section experiences-section">
                <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiences</h2>
                

                <? foreach($career as $job):?>
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title"><?= $job['post'] ?></h3>
                            <div class="time"><?= $job['yearStar'] ?> - <?= $job['yearEnd'] ?></div>
                        </div><!--//upper-row-->
                        <div class="company"><?= $job['place'] ?></div>
                    </div><!--//meta-->
                    <div class="details">
                        <p><?= $job['duty'] ?></p>
                    </div><!--//details-->
                </div><!--//item-->
            <? endforeach; ?>
                
            </section><!--//section-->
            
            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-archive"></i>Projects</h2>
                <div class="intro">
                    <p>You can list your side projects or open source libraries in this section. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et ligula in nunc bibendum fringilla a eu lectus.</p>
                </div><!--//intro-->
                <? foreach($projects as $proj):?>
                <div class="item">
                    <span class="project-title"><a href="<?= $proj['linkProject'] ?>"><?= $proj['nameProject'] ?></a></span> - <span class="project-tagline"><?= $proj['dutyProject'] ?></span> 
                </div><!--//item-->
            <? endforeach; ?>
            </section><!--//section-->
            
            <section class="skills-section section">
                <h2 class="section-title"><i class="fa fa-rocket"></i>Skills &amp; Proficiency</h2>
                <div class="skillset">
                <? foreach($skillset as $skill):?>        
                    <div class="item">
                        <h3 class="level-title"><?= $skill['nameSkillset'] ?></h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="<?= $skill['lvlSkillset'] ?>">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                <? endforeach; ?>
                    
                </div>  
            </section><!--//skills-section-->
            
        </div><!--//main-body-->
    </div>
 
    <footer class="footer">
        <div class="text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>            
</body>
</html> 

