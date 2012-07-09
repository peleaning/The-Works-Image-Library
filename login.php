<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = 'http://www.w3.org/1999/xhtml'>
    <head>
    	
        <!-- META -->
        <meta http-equiv = 'Content-Type' content = 'text/html; charset=UTF-8' />
        
        <link rel = 'shortcut icon' href = ''>
        
        <title>Image Library test</title>
        
    </head>

    <body class = 'login'>
    	
    	<div class = 'loginAlign'>
	    	
	    	<div class = 'loginBlock'>
	    	
	    		<div class = 'logo'></div>
	    		
	    		<div class = 'darkBlock'>
		    		
		    		<div class = 'username'>
		    			
		    			<div class = 'title'>
		    				<span>Username</span>
		    			</div>
		    		
		    			<input type = 'text' value = '' name = 'works-user' id = 'user' />
		    		</div>
		    		
		    		<div class = 'password'>
		    		
		    			<div class = 'title'>
		    				<span>Password</span>
		    			</div>
		    			
		    			<input type = 'password' value = '' name = 'works-pass' id = 'pass' />
		    		</div>
		    		
		    		<div class = 'right'>
		    			<div class = 'processing processingHidden'></div>
		    		
			    		<div class = 'button'>
			    			<span>Log In</span>
			    		</div>
			    	</div>
			    	
			    	<div class = 'clear'></div>
			    
			    </div>
			    
			    <div class = 'message <?php if(isset($_GET['status'])) { echo 'status'; } ?>'>
	    			<span><?php echo $globals['logout_ok']; ?></span>
	    		</div>
	    		
	    		<div class = 'errorMessage'>
	    			<span><?php echo $globals['login_error']; ?></span>
	    		</div>
	    		
	    		<div class = 'worksLogo'></div>
	    		
	    	</div>
	    	
	    </div>
		
		<div class = 'footer'>&copy;<?php echo date('Y'); ?> The Works Design Communications Ltd.</div>
		    
	</body>

</html>