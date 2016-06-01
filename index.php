<?php

session_start(); 


require 'functions.php';
require 'templates.php';

$max = sizeof($beerList);
$countryList = array(
		 array('name' => 'Luxembourg',
                       'visitDuration' => 13,
                       'favoriteMemory' => 'Brussels',
                       'img' => 'img/luxemburg.jpg'
                      ),
                 array('name' => 'Germany',
                       'visitDuration' => 7,
                       'favoriteMemory' => 'Brussels',
                       'img' => 'img/germany.jpg'
                      ),
                 array('name' => 'Brussels',
                       'visitDuration' => 7,
                       'favoriteMemory' => 'Brussels',
                       'img' => 'img/brussels.jpg'
                      ),
                 array('name' => 'United Kingdom',
                       'visitDuration' => 10,
                       'favoriteMemory' => 'Brussels',
                       'img' => 'img/united_kingdom.jpg'
                      )
            	);

$content = "";
$pageCount = 1;
$pictureCount = 0; 
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
    $content .= "<a href='#' onclick='history.go(-1)'><div class='text-center'><button class='btn btn-success'>Yes</button></a><a href='#' onclick='history.go(-1)'><button class='btn btn-danger'>No</button></div></a>";
    $content .= '</div>';
    
    
}

else if (isset($_GET['beerList1'])){
			$content .= '<div class="row">';
	$content .= "<p class='lead'>Can you guess which country these are from? Click on each beer to find out!</p>";


	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[0]['name'] . '</h2><a href="?itemDetail=' . 0 . '"><img src="' . $beerList[0]['img'] . '" alt="' . $beerList[0]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[1]['name'] . '</h2><a href="?itemDetail=' . 1 . '"><img src="' . $beerList[1]['img'] . '" alt="' . $beerList[1]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '</div><div class="row">';
	$content .= '<nav class="text-center">';
	$content .=	"<button><a href='?index.php' id='prev'>Prev</a></button>";			
	$content .=  	"<button><a href='?beerList2'id='next'>Next</a></button>";
	$content .= '</nav>';
}
else if(isset($_GET['beerList2'])){
		$content .= '<div class="row">';
	$content .= "<p class='lead'>Can you guess which country these are from? Click on each beer to find out!</p>";


	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[2]['name'] . '</h2><a href="?itemDetail=' . 2 . '"><img src="' . $beerList[2]['img'] . '" alt="' . $beerList[2]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[3]['name'] . '</h2><a href="?itemDetail=' . 3 . '"><img src="' . $beerList[3]['img'] . '" alt="' . $beerList[3]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '</div><div class="row">';
	$content .= '<nav class="text-center">';
	$content .=	"<button><a href='?beerList1' id='prev'>Prev</a></button>";			
	$content .=  	"<button><a href='?beerList3'id='next'>Next</a></button>";
	$content .= '</nav>';


}
else if(isset($_GET['beerList3'])){
		$content .= '<div class="row">';
	$content .= "<p class='lead'>Can you guess which country these are from? Click on each beer to find out!</p>";


	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[4]['name'] . '</h2><a href="?itemDetail=' . 4 . '"><img src="' . $beerList[4]['img'] . '" alt="' . $beerList[4]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[5]['name'] . '</h2><a href="?itemDetail=' . 5 . '"><img src="' . $beerList[5]['img'] . '" alt="' . $beerList[5]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '</div><div class="row">';
	$content .= '<nav class="text-center">';
	$content .=	"<button><a href='?beerList2' id='prev'>Prev</a></button>";			
	$content .=  	"<button><a href='?beerList4'id='next'>Next</a></button>";
	$content .= '</nav>';	
}
else if(isset($_GET['beerList4'])){
		$content .= '<div class="row">';
	$content .= "<p class='lead'>Can you guess which country these are from? Click on each beer to find out!</p>";


	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[6]['name'] . '</h2><a href="?itemDetail=' . 6 . '"><img src="' . $beerList[6]['img'] . '" alt="' . $beerList[6]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[7]['name'] . '</h2><a href="?itemDetail=' . 7 . '"><img src="' . $beerList[7]['img'] . '" alt="' . $beerList[7]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '</div><div class="row">';
	$content .= '<nav class="text-center">';
	$content .=	"<button><a href='?beerList3' id='prev'>Prev</a></button>";			
	$content .=  	"<button><a href='?beerList5'id='next'>Next</a></button>";
	$content .= '</nav>';

}

else if(isset($_GET['beerList5'])){
		$content .= '<div class="row">';
	$content .= "<p class='lead'>Can you guess which country these are from? Click on each beer to find out!</p>";


	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[8]['name'] . '</h2><a href="?itemDetail=' . 8 . '"><img src="' . $beerList[8]['img'] . '" alt="' . $beerList[8]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[9]['name'] . '</h2><a href="?itemDetail=' . 1 . '"><img src="' . $beerList[9]['img'] . '" alt="' . $beerList[9]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '</div><div class="row">';
	$content .= '<nav class="text-center">';
	$content .=	"<button><a href='?beerList4' id='prev'>Prev</a></button>";			
	$content .=  	"<button><a href='?beerList6'id='next'>Next</a></button>";
	$content .= '</nav>';

}

else if(isset($_GET['beerList6'])){
		$content .= '<div class="row">';
	$content .= "<p class='lead'>Can you guess which country these are from? Click on each beer to find out!</p>";


	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[10]['name'] . '</h2><a href="?itemDetail=' . 10 . '"><img src="' . $beerList[10]['img'] . '" alt="' . $beerList[10]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[11]['name'] . '</h2><a href="?itemDetail=' . 11 . '"><img src="' . $beerList[11]['img'] . '" alt="' . $beerList[11]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '</div><div class="row">';
	$content .= '<nav class="text-center">';
	$content .=	"<button><a href='?beerList5' id='prev'>Prev</a></button>";			
	$content .=  	"<button><a href='?beerList7'id='next'>Next</a></button>";
	$content .= '</nav>';

}
else if(isset($_GET['beerList7'])){
		$content .= '<div class="row">';
	$content .= "<p class='lead'>Can you guess which country these are from? Click on each beer to find out!</p>";


	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[12]['name'] . '</h2><a href="?itemDetail=' . 12 . '"><img src="' . $beerList[12]['img'] . '" alt="' . $beerList[12]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[13]['name'] . '</h2><a href="?itemDetail=' . 13 . '"><img src="' . $beerList[13]['img'] . '" alt="' . $beerList[13]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '</div><div class="row">';
	$content .= '<nav class="text-center">';
	$content .=	"<button><a href='?beerList6' id='prev'>Prev</a></button>";			
	$content .=  	"<button><a href='?beerList8'id='next'>Next</a></button>";
	$content .= '</nav>';

}

else if(isset($_GET['beerList8'])){
		$content .= '<div class="row">';
	$content .= "<p class='lead'>Can you guess which country these are from? Click on each beer to find out!</p>";


	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[14]['name'] . '</h2><a href="?itemDetail=' . 14 . '"><img src="' . $beerList[14]['img'] . '" alt="' . $beerList[14]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[15]['name'] . '</h2><a href="?itemDetail=' . 15 . '"><img src="' . $beerList[15]['img'] . '" alt="' . $beerList[15]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '</div><div class="row">';
	$content .= '<nav class="text-center">';
	$content .=	"<button><a href='?beerList7' id='prev'>Prev</a></button>";			
	$content .=  	"<button><a href='?beerList9'id='next'>Next</a></button>";
	$content .= '</nav>';

}

else if(isset($_GET['beerList9'])){
		$content .= '<div class="row">';
	$content .= "<p class='lead'>Can you guess which country these are from? Click on each beer to find out!</p>";



	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[16]['name'] . '</h2><a href="?itemDetail=' . 16 . '"><img src="' . $beerList[16]['img'] . '" alt="' . $beerList[16]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[17]['name'] . '</h2><a href="?itemDetail=' . 17 . '"><img src="' . $beerList[17]['img'] . '" alt="' . $beerList[17]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '</div><div class="row">';
	$content .= '<nav class="text-center">';
	$content .=	"<button><a href='?beerList8' id='prev'>Prev</a></button>";			
	$content .=  	"<button><a href='?beerList10'id='next'>Next</a></button>";
	$content .= '</nav>';
}
else if(isset($_GET['beerList10'])){
			$content .= '<div class="row">';
	$content .= "<p class='lead'>Can you guess which country these are from? Click on each beer to find out!</p>";


	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[18]['name'] . '</h2><a href="?itemDetail=' . 18 . '"><img src="' . $beerList[18]['img'] . '" alt="' . $beerList[18]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[19]['name'] . '</h2><a href="?itemDetail=' . 19 . '"><img src="' . $beerList[19]['img'] . '" alt="' . $beerList[19]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '</div><div class="row">';
	$content .= '<nav class="text-center">';
	$content .=	"<button><a href='?beerList9' id='prev'>Prev</a></button>";			
	$content .=  	"<button><a href='?beerList11'id='next'>Next</a></button>";
	$content .= '</nav>';

}

else if(isset($_GET['beerList11'])){
		$content .= '<div class="row">';
	$content .= "<p class='lead'>Can you guess which country these are from? Click on each beer to find out!</p>";


	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[20]['name'] . '</h2><a href="?itemDetail=' . 20 . '"><img src="' . $beerList[20]['img'] . '" alt="' . $beerList[20]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[21]['name'] . '</h2><a href="?itemDetail=' . 21 . '"><img src="' . $beerList[21]['img'] . '" alt="' . $beerList[21]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '</div><div class="row">';
	$content .= '<nav class="text-center">';
	$content .=	"<button><a href='?beerList10' id='prev'>Prev</a></button>";			
	$content .=  	"<button><a href='?beerList12'id='next'>Next</a></button>";
	$content .= '</nav>';

}

else if(isset($_GET['beerList12'])){
		$content .= '<div class="row">';
	$content .= "<p class='lead'>Can you guess which country these are from? Click on each beer to find out!</p>";


	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[22]['name'] . '</h2><a href="?itemDetail=' . 22 . '"><img src="' . $beerList[22]['img'] . '" alt="' . $beerList[22]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[23]['name'] . '</h2><a href="?itemDetail=' . 23 . '"><img src="' . $beerList[23]['img'] . '" alt="' . $beerList[23]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '</div><div class="row">';
	$content .= '<nav class="text-center">';
	$content .=	"<button><a href='?beerList11' id='prev'>Prev</a></button>";			
	$content .=  	"<button><a href='?beerList13'id='next'>Next</a></button>";
	$content .= '</nav>';

}

else if(isset($_GET['beerList13'])){
		$content .= '<div class="row">';
	$content .= "<p class='lead'>Can you guess which country these are from? Click on each beer to find out!</p>";


	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[24]['name'] . '</h2><a href="?itemDetail=' . 24 . '"><img src="' . $beerList[24]['img'] . '" alt="' . $beerList[24]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[25]['name'] . '</h2><a href="?itemDetail=' . 25 . '"><img src="' . $beerList[25]['img'] . '" alt="' . $beerList[25]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '</div><div class="row">';
	$content .= '<nav class="text-center">';
	$content .=	"<button><a href='?beerList12' id='prev'>Prev</a></button>";			
	$content .=  	"<button><a href='?beerList14'id='next'>Next</a></button>";
	$content .= '</nav>';

}

else if(isset($_GET['beerList14'])){
		$content .= '<div class="row">';
	$content .= "<p class='lead'>Can you guess which country these are from? Click on each beer to find out!</p>";


	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[26]['name'] . '</h2><a href="?itemDetail=' . 26 . '"><img src="' . $beerList[26]['img'] . '" alt="' . $beerList[26]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '<div class="col-md-6"><h2 class="text-center bg-success">' . $beerList[27]['name'] . '</h2><a href="?itemDetail=' . 27 . '"><img src="' . $beerList[27]['img'] . '" alt="' . $beerList[27]['name'] . '" class = "img-responsive center-block" width="500px" height="250px"></a></div>';
	$content .= '</div><div class="row">';
	$content .= '<nav class="text-center">';
	$content .=	"<button><a href='?beerList13' id='prev'>Prev</a></button>";			
	$content .=  	"<button><a href='?index.php'id='next'>Next</a></button>";
	$content .= '</nav>';

}

		
	


 else {
	 //generate default screen/item listing
	
	 // $content .= $sideNavbar;
	  $content .= "<div class='jumbotron'>";

 	$content .= "<p class='lead'>A brief collection of my travel experiences.</p>";
	$content .= "<h2>Places</h2>"; 
	$content .= "<div class='row'>";
	$content .= "<span class='col-md-4'><img src='img/londonIndex.jpeg' alt='London' style='width:304px;height:228px;'></span>"; 
	$content .= "<span class='col-md-4'><img src='img/grandPalaceBelgium.jpg' alt='Belgium' style='width:304px;height:228px;'></span>"; 
	$content .= "<span class='col-md-4'><img src='img/peru-machu-picchu-ss.jpg' alt='Peru' style='width:304px;height:228px;'></span>"; 
	$content .= "</div>";
	$content .= "</div>";
 	$content .= "<div class='jumbotron'>";
	$content .= "<h2>Adventures</h2>"; 
	$content .= "<span class='row'>";
	$content .= "<a href='?beerList1'><span class='col-md-4'><img src='img/stbernard_logo.png' alt='Beer Adventures' style='width:304px;height:228px;'><br />Quick Details (Add Link Layover via jQuery)</span></a>"; 
	$content .= "<span class='col-md-4'><img src='#' alt='Travel Notes' style='width:304px;height:228px;'></span>"; 
	$content .= "<span class='col-md-4'><img src='#' alt='Runs' style='width:304px;height:228px;'></span>"; 
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
	

            	<span class= "garamond"><a href='?index.php'><h2 class="font-family-Garamond text-center">Memories From Traveling Across the World</h2></a></span>
            </div>
	</div>
	
		<div class="row main">
				

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
