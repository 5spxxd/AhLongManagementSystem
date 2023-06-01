<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <?php
        // Define an array of card data
        $cards = array(
            array(
                'img' => 'css/999.jpeg',
                'name' => 'Harith',
                'role' => 'D22114917',
                'social' => array(
                    array('icon' => 'fa fa-facebook', 'link' => '#'),
                    array('icon' => 'fa fa-instagram', 'link' => 'https://www.instagram.com/5spxxd/'),
                    array('icon' => 'fa fa-whatsapp', 'link' => 'https://wa.link/blhkn4')
                )
            ),
            array(
                'img' => '',
                'name' => 'Arep',
                'role' => 'D11223344',
                'social' => array(
                    array('icon' => 'fa fa-facebook', 'link' => '#'),
                    array('icon' => 'fa fa-instagram', 'link' => 'https://instagram.com/arifdnl.?igshid=NTc4MTIwNjQ2YQ=='),
                    array('icon' => 'fa fa-whatsapp', 'link' => 'https://wa.link/u723o0')
                )
            ),
            array(
                'img' => 'john.png',
                'name' => 'Safiey',
                'role' => 'D99887766',
                'social' => array(
                    array('icon' => 'fa fa-facebook', 'link' => '#'),
                    array('icon' => 'fa fa-instagram', 'link' => '#'),
                    array('icon' => 'fa fa-whatsapp', 'link' => 'https://api.whatsapp.com/send?phone=YOUR_PHONE_NUMBER')
                )
            )
        );

        // Loop through the cards and generate the HTML dynamically
        foreach ($cards as $card) {
            echo '<div class="card">';
            echo '<div class="content">';
            echo '<div class="img"><img src="' . $card['img'] . '"></div>';
            echo '<div class="cardContent">';
            echo '<h3>' . $card['name'] . '<br><span>' . $card['role'] . '</span></h3>';
            echo '</div>';
            echo '</div>';
            echo '<ul class="sci">';
            foreach ($card['social'] as $social) {
                echo '<li style="--i:1">';
                echo '<a href="' . $social['link'] . '"><i class="' . $social['icon'] . '" aria-hidden="true"></i></a>';
                echo '</li>';
            }
            echo '</ul>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
