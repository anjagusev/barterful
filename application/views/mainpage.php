<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0 "/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('_styles/main.css');?>" media="all" />

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700|Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css' />
       
       
              
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
        

        
        <title>Welcome to Barterful</title>
        
    </head>
    <body>
    
    
        
<!-- ************************ Header ************************** -->

	<div id="headerWrapper">
		<header>
		     <a href="index.php" class="logo">barterful</a>
		    
			<nav>
			    <ul>
			       <li> <a href="login.php">Log in </a> </li>
			       <li> <a href="signup.php">Sign up</a> </li>
			    </ul>
			</nav>
		</header>
	</div>
    
<!-- ************************ Hero Unit ************************** -->

		<div id="heroWrapper">
	        <section id="heroUnit">
	        	<article class="titleText">
		            <h1>What skill would you like to barter today? </h1>
		            
		            <h3>Barterful is a network of online bartering communities. <a href="#">Learn More </a> </h3>
		            <div id="inputWrapper">
		            	<input type="text"  placeholder="Search"/>
		            	<a href="#" class="foundicon-search"></a>
		            </div>
	        	</article>
	           
	            
	            <!--<i class="general foundicon-search"></i>-->
	                         
	        </section>
	
		</div>
        
<!-- ************************ Main Content ************************** -->
        
        <div id="contentWrapper">
 
        

        <section id="mainContent">
        <h2> Your closest barterspot is <a href="#"> Humber College</a></h2>
                
        <div id="tabContainer">
		    <div class="tabs">
		      <ul>
		        <li id="tabHeader_1"> Offering</li>
		        <li id="tabHeader_2">Top Rated</li>
		        <li id="tabHeader_3">Newest</li>
		        <li id="tabHeader_4">Wanting</li>
		      </ul>
		    </div>
		    <div class="tabscontent">
		      <div class="tabpage" id="tabpage_1">
		        <h3>Page 1</h3>
		        <article>
                <ul>
                    <li>Mike</li>
                    <li>27M</li>
                    <li>Can: Give massage</li>
                    <li>Wants: Food </li>
                    <li> 3/5 stars </li>
                </ul>
            </article>
		      </div>
		      <div class="tabpage" id="tabpage_2">
		        <h3>Page 2</h3>
		        <article>
                <ul>
                    <li>Mike</li>
                    <li>27M</li>
                    <li>Can: Give massage</li>
                    <li>Wants: Food </li>
                    <li> 3/5 stars </li>
                </ul>
            </article>
		      </div>
		      <div class="tabpage" id="tabpage_3">
		        <h3>Page 3</h3>
		        <article>
                <ul>
                    <li>Mike</li>
                    <li>27M</li>
                    <li>Can: Give massage</li>
                    <li>Wants: Food </li>
                    <li> 3/5 stars </li>
                </ul>
            </article>
		      </div>
		      <div class="tabpage" id="tabpage_4">
		        <h3>Page 4</h3>
		        <article>
                <ul>
                    <li>Mike</li>
                    <li>27M</li>
                    <li>Can: Give massage</li>
                    <li>Wants: Food </li>
                    <li> 3/5 stars </li>
                </ul>
            </article>
		      </div>
		    </div>
        
            
        </section>
        
       
        
<!-- ************************ Side Bar ************************** -->
        
     
        
	        <aside id="sideBar">
	           
	           <h2>Categories </h2>
	           <form>
	           <ul>
	               <li> <input id="all" name="all" type="checkbox" checked="checked"> All </input></li>
	               <li> <input id="food" name="food" type="checkbox"> Food </input> </li>
	               <li> <input id="massage" name="massage" type="checkbox"> Massage  </input></li>
	               <li> <input id="lanuages" name="languages" type="checkbox"> Languages </input></li>
	               <li> <input id="tutoring" name="tutoring" type="checkbox"> Tutoring </input></li>
	               <li> <input id="photography" name="photography" type="checkbox"> Photography </input></li>
	               <li> <input id="graphicDesign" name="graphicDesign" type="checkbox"> Graphic Design </input></li>
	               <li> <input id="sewing" name="sewing" type="checkbox"> Sewing </input></li>
	               <li> <input id="fashion" name="fashion" type="checkbox"> Fashion </input></li>
	            </ul>
	            </form>
	            
	        </aside>
	        

        </div><!-- /end allContentWrapper -->

        <hr />
<!-- ************************ Footer ************************** -->
        
   <div id="footerWrapper">
	     <footer>
	      
		     <ul>
			     <li> Facebook </li>
			     <li> Twitter</li>
			     <li> YouTube </li>
			     <li> Pinterest</li>
			     <li> Blog </li>
		     </ul>
		     <ul>
		     	<li> About </li>
		     	<li> How it Works</li>
		     	<li> Media </li>
		     	<li> Terms of Use</li>
		     	<li> Privacy Policy</li>
		     	<li> Contact Us</li>
		     </ul>
		     <p>  &copy; <?php echo date("Y"); ?> Barterful Inc. </p>
	     </footer>
   </div>



</body>
                <!-- including javascript stuff -->
    <script src="<?php echo base_url('_js/jquery-1.9.0.min.js');?>"></script>
    <script src="<?php echo base_url('_js/modernizr.js');?>"></script>
    <script src="<?php echo base_url('_js/main.js');?>"></script>
    

</html>
