<?php

session_start();


// SCROLL DOWN TO SEE THE CODE I WROTE TO DESIGN THE WEBSTIE 


require 'functions.php';

$beerList = array(
                 array('name' => 'Grimbergen Dubbel',
                       'price' => 123.99,
                       'description' => 'Brussels',
                       'img' => 'img/grim_dubbel.png'
                      ),
                 array('name' => 'Grimbergen Blond',
                       'price' => 53.23,
                       'description' => 'Brussels',
                       'img' => 'img/grim_blond.png'
                      ),
                 array('name' => 'Nocturnum',
                       'price' => 85.99,
                       'description' => 'Brussels',
                       'img' => 'img/Delirium-01.jpg'
                      ),
                 array('name' => 'St. Bernardus',
                       'price' => 39.12,
                       'description' => 'Brussels',
                       'img' => 'img/stbernard_logo.png'
                      ),
                 array('name' => 'Montagnarde',
                       'price' => 3.99,
                       'description' => 'Brussels',
                       'img' => 'img/montgn.jpg'
                      ),
                 array('name' => 'Bersalis Tripel',
                       'price' => 322.32,
                       'description' => 'Brussels',
                       'img' => 'img/Bersalis-Tripel-LOGO.jpg'
 	                  ),
                 array('name' => 'Doom Bar',
                       'price' => 53.23,
                       'description' => 'United Kingdom',
                       'img' => 'img/doom_bar.jpg'
                      ),
                 array('name' => 'Brains: SA',
                       'price' => 85.99,
                       'description' => 'United Kingdom',
                       'img' => 'img/BrainsSA.jpg'
                      ),
                 array('name' => 'Carlsberg',
                       'price' => 39.12,
                       'description' => 'United Kingdom',
                       'img' => 'img/carlsberg_logo.jpg'
                      ),
                 array('name' => 'Crabbies',
                       'price' => 3.99,
                       'description' => 'United Kingdom',
                       'img' => 'img/crabbies-logo.png'
                      ),
                 array('name' => 'London Porter',
                       'price' => 322.32,
                       'description' => 'United Kingdom',
                       'img' => 'img/fullers_london_porter.jpg'
            		  ),
                 array('name' => 'Reverend James',
                       'price' => 123.99,
                       'description' => 'United Kingdom',
                       'img' => 'img/innisgunn-sabrainstherevjames.jpg'
                      ),
                 array('name' => 'Peroni',
                       'price' => 53.23,
                       'description' => 'United Kingdom',
                       'img' => 'img/Peroni_Logo.jpg'
                      ),
                 array('name' => 'St. Edmunds',
                       'price' => 85.99,
                       'description' => 'United Kingdom',
                       'img' => 'img/lGreeneKingLogo.jpg'
                      ),
                 array('name' => 'Frontier',
                       'price' => 39.12,
                       'description' => 'United Kingdom',
                       'img' => 'img/frontier_logo.png'
                      ),
                 array('name' => 'Kronenbourg',
                       'price' => 3.99,
                       'description' => 'United Kingdom',
                       'img' => 'img/Kronenbourg_1664.png'
                      ),
                 array('name' => 'La Guillotine',
                       'price' => 322.32,
                       'description' => 'Brussels',
                       'img' => 'img/la_guillotine_logo.jpg'
            		  ),
                 array('name' => 'Trappistes Rochefort',
                       'price' => 123.99,
                       'description' => 'Brussels',
                       'img' => 'img/trappRochefort.jpg'
                      ),
                 array('name' => 'La Rulles Cuvee Meilleurs Voeux',
                       'price' => 53.23,
                       'description' => 'Brussels',
                       'img' => 'img/La-Rulles-Cuvee-Meilleurs-Voeux.jpg'
                      ),
                 array('name' => 'Lindemans Faro',
                       'price' => 85.99,
                       'description' => 'Brussels',
                       'img' => 'img/Lindemans-Faro.jpg'
                      ),
                 array('name' => 'Westmalle Trappist',
                       'price' => 39.12,
                       'description' => 'Brussels',
                       'img' => 'img/Logo-westmalle.png'
                      ),
                 array('name' => 'Duvel',
                       'price' => 3.99,
                       'description' => 'Brussels',
                       'img' => 'img/duvelLogo.jpg'
                      ),
                 array('name' => 'Affligem',
                       'price' => 322.32,
                       'description' => 'Netherlands',
                       'img' => 'img/affligem_logo.png'
            		  ),
                 array('name' => 'Heidelberger',
                       'price' => 322.32,
                       'description' => 'Germany',
                       'img' => 'img/heidelberger.jpg'
            		  ),
                 array('name' => 'Schoefferhofer Weizen',
                       'price' => 123.99,
                       'description' => 'Germany',
                       'img' => 'img/schoefferhofer-lgo.png'
                      ),
                 array('name' => 'Bofferding',
                       'price' => 53.23,
                       'description' => 'Luxembourg',
                       'img' => 'img/Bofferding-Logo.jpg'
                      ),
                 array('name' => 'Super Bock',
                       'price' => 85.99,
                       'description' => 'Luxembourg',
                       'img' => 'img/super-bock.jpeg'
                      ),
                 array('name' => 'Battin Gambrinus',
                       'price' => 39.12,
                       'description' => 'Luxembourg',
                       'img' => 'img/battin-9.jpg'
                      )
                );

$countryList = array(
				 array('name' => 'Luxembourg',
                       'visitDuration' => 123.99,
                       'favoriteMemory' => 'Brussels',
                       'img' => 'img/luxemburg.jpg'
                      ),
                 array('name' => 'Germany',
                       'visitDuration' => 123.99,
                       'favoriteMemory' => 'Brussels',
                       'img' => 'img/germany.jpg'
                      ),
                 array('name' => 'Brussels',
                       'visitDuration' => 123.99,
                       'favoriteMemory' => 'Brussels',
                       'img' => 'img/brussels.jpg'
                      ),
                 array('name' => 'United Kingdom',
                       'visitDuration' => 123.99,
                       'favoriteMemory' => 'Brussels',
                       'img' => 'img/united_kingdom.jpg'
                      )
            	);

$content = "";
$pageCount = 1;
$nextPage = 0; 
$beerRef = "";
$beerRef =  '?beerList=' . $pageCount . '';     

//Main screen switch
if (isset($_GET['itemDetail'])) {
    //generate detail screen for item selected

    $beerId = $_GET['itemDetail'];
    $content .= "<span class='garamond'> <h1 class='text-center font-family-garamond'>" . $beerList[$beerId]['name'] . "</h1></span>";
    $content .= "<h3 class='text-center'>I had this beer in: " . $beerList[$beerId]['description'] . "</h3>";
    $content .= '<div class="row">';
   foreach ($countryList as $index => $country){
    	if ($beerList[$beerId]['description'] == $country['name']){
    		$content .= '<div class="col-md-6"><img src="' . $country['img'] . '" alt="' . $country['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></div>';
    	}
    }
    $content .= '<div class="col-md-6 align-vertical">';
    $content .= '<img src="' . $beerList[$beerId]['img'] . '" alt="' . $beerList[$beerId]['name'] . '" class = "img-responsive center-block" width="500px" height="250px">';
    $content .= "<h2 class='text-center'>Have you ever had this beer?</h2>";
    $content .= "<a href='http://hellerdj.cse252.spikeshroud.com/creativity-project/index.php'><div class='text-center'><button class='btn btn-success'>Yes</button></a><a href='http://hellerdj.cse252.spikeshroud.com/creativity-project/index.php'> <button class='btn btn-danger'>No</button></div></a>";
    $content .= '</div>';
    
} else if (isset($_GET['?beerList1'])){
	
	//Display list of beers
    	$content .= '<div class="row">';
	$content .= "<p class='lead'>Can you guess which country these are from? Click on each beer to find out!</p>";
	// Counter to make sure only 2 beers display per page
	$pictureCount = 0; 
	foreach ($beerList as $index => $beer) {
        if ($index != 0 && ($index + 1) % 2 == 1) {
            $content .= '</div><div class="row">';
        }
	$pictureCount = $pictureCount + 1;
	if($pictureCount < 3){
        $content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beer['name'] . '</h2><a href="?itemDetail=' . $index . '"><img src="' . $beer['img'] . '" alt="' . $beer['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	}
	else{
		if ($pageCount == 1){
			$content .= "<nav>";
			$content .=  	'<a href="?beerList='. $pageCount+1 .'" id="next">Next</a>';
			$content .= "</nav>";
		}
		else {
			$content .= "<nav>";
			$content .=	'<a href="?beerList='. $pageCount-1 .'"id="prev">Prev</a>';			
			$content .=  	'<a href="?beerList='. $pageCount+1 .'"id="next">Next</a>';
			$content .= "</nav>";		
		}
	$pageCount = $pageCount + 1;
	}
    }
   	$content .= "</div>";

} else {
    //generate default screen/item listing
	$content .= "<p class='lead'>This website is dedicated to the first time I traveled to Europe. Take a look at what I discovered.</p>";
	$content .=$pageCount;  
	$content .= '?beerList' . $pageCount . '';     


 	$content .= "<div class='jumbotron'>";
	$content .= "<h2>Places</h2>"; 
	$content .= "<span class='row'>";
	$content .= "<span class='col-md-4'><img src='#' alt='coming soon' style='width:304px;height:228px;'></span>"; 
	$content .= "<span class='col-md-4'><img src='#' alt='coming soon' style='width:304px;height:228px;'></span>"; 
	$content .= "<span class='col-md-4'><img src='#' alt='coming soon' style='width:304px;height:228px;'></span>"; 
	$content .= "</span>";
	$content .= "</div>";
 	$content .= "<div class='jumbotron'>";
	$content .= "<h2>Adventures</h2>"; 
	$content .= "<span class='row'>";
	//$content .= "<span class='row'>";
	$content .= "<a href='?beerList1'><span class='col-md-4'><img src='img/luxemburg.jpg' alt='Mountain View' style='width:304px;height:228px;'></span></a>"; 
	$content .= "<span class='col-md-4'><img src='#' alt='coming soon' style='width:304px;height:228px;'></span>"; 
	$content .= "<span class='col-md-4'><img src='#' alt='coming soon' style='width:304px;height:228px;'></span>"; 
	$content .= "</span>";
	$content .= "</div>";
}
?>
<!doctype html>
<html lang="en">
    <head>
        <title>World Beer List</title>
        <meta charset="utf-8">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
    	<div class="jumbotron">
        	<div class="container">
            	<span class= "garamond"><h2 class="font-family-Garamond text-center">Memories From Traveling Across the World</h2></span>
            </div>
        </div>
            <div class="container">
            	<?=$content?>
        	</div>

        <script src="http://code.jquery.com/jquery-2.2.2.js"></script>
        <!-- <script> 
        $(document).ready(function() {
			$('#beerPic').on('click', function() {
				$(this).next().slideUp();
   			 });
		});
		</script> --!>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>

