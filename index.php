<?php 
    
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
	require('header.html');
	$arr = json_decode(file_get_contents('array.txt'));

?>
<div class="container">
    <div class="blur-image">
        <img src="public/images/blur_capoeira_background.jpg'">
    </div>
    <div class="page-header-well-margin"></div>
    <div class="well col-md-12">
        <section class="col-md-12">
            <div class="page-header-well search-results-header">
                <h1 class="font-primary">Learn Capoeira</h1>
                <h2 class="header_desc">A Capoeira encyclopaedia concerning all things capoeira. Learn about the art, culture, philosophy, music and practice. Learn the capoeira way of life and move towards better fitness, health, and spiritual transcendence.  </h2>
                <h4 class="header_desc">Want to learn more <a href="#">join today</a></h4>
            </div>
        </section>
        <div class="row"></div><div class="clear-fix"></div>
        <div class="row">
            <section class="col-md-12">

                <div class="col-md-12">

                    <div id="blog_list">
                        <?php 

                        	echo '<pre>';
                            foreach ($arr as $key => $value) {
                                
                                print_r($value);

                            }
                            
                            echo '</pre>';

                        ?>              
                    </div>

                </div>  
 
            </section>
        </div>
    </div>
</div>  
<?php 

	require('footer.html');

?>