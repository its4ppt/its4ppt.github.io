<?php include_once __DIR__ . '/DRY/head.php' ?>

<div data-role="page">


<?php include_once __DIR__ . '/DRY/topnav.php' ?>

  <div role="main" class="ui-content">
		<p>Page content goes here.</p>

    <a href="fortest.php" data-transition="flow">about them</a>
    <a href="#popupLogin" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-check ui-btn-icon-left ui-btn-a" data-transition="pop">Sign in</a>
   <div data-role="popup" id="popupLogin" data-theme="a" class="ui-corner-all">
       <form>
           <div style="padding:10px 20px;">
               <h3>Please sign in</h3>
               <label for="un" class="ui-hidden-accessible">Username:</label>
               <input type="text" name="user" id="un" value="" placeholder="username" data-theme="a">
               <label for="pw" class="ui-hidden-accessible">Password:</label>
               <input type="password" name="pass" id="pw" value="" placeholder="password" data-theme="a">
               <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check">Sign in</button>
           </div>
       </form>
   </div>



	</div><!-- /content -->


<?php include_once __DIR__ . '/DRY/foot.php' ?>
