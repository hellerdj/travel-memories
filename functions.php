<?php


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

function getItemCount() {
    if (!isset($_SESSION['cart'])) {
        return 0;
    }

    $numItems = 0;
    foreach ($_SESSION['cart'] as $itemQty) {
        $numItems += $itemQty;
    }
    return $numItems;
}

function addToCart($id) {
    if (!isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] = 0;
    }

    $_SESSION['cart'][$id]++;
}
	
$content = "";









?>
