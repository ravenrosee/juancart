<?php
if(session_status() == PHP_SESSION_NONE)
    session_start();
?>

<!DOCTYPE html>
<html>
<head>

    <title>About</title>

    <link rel="icon" href="../icon/icon.png" type="image/x-icon">
    
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Onest">
    
    <script src="https://unpkg.com/scrollreveal"></script>

</head>


<body>

    <div class="log">
        <?php include('../includesPHP/topNav.php')?>   
    </div>

    <div class="abtContent">

        <div class="innerAbtContent">



            <p class="abt-title">HoodGrown Clothing</p>

            <div class="abt-grid">
                
                
                 
            

                <div class="abt-grid-item">

                    <div class="abt-item-img-con2">
                        <img src="resources/Hoodgrow.jpg" class="abt-item-img" alt="owner.png">
                    </div>

                    <div class="abt-item2">

                        <p class="abt-item-title">HoodGrown Clothing</p>
                      

                        <p class="abt-item-info">𝔈𝔳𝔢𝔯𝔶𝔱𝔥𝔦𝔫𝔤 𝔦𝔫 𝔱𝔥𝔢 𝔰𝔱𝔯𝔢𝔢𝔱𝔰 𝔰𝔢𝔢𝔪𝔰 𝔰𝔬𝔣𝔱 𝔣𝔬𝔠𝔲𝔰</p>
                        <br></br>
                        <p class="abt-item-info"> H: Monday - Friday: 8:00 AM to 5:00 PM</p>
                        <br></br>
                        <p class="abt-item-info"> Binangonan, Rizal</p>

                    </div>

                </div>

                <!--<div class="abt-grid-item">-->

                <!--    <div class="abt-item-img-con">-->
                <!--        <img src="resources/Weak.png" class="abt-item-img" alt="owner.png">-->
                <!--    </div>-->

                <!--    <div class="abt-item3">-->

                <!--        <p class="abt-item-title">WEAKNESSES</p>-->
                    
                <!--        <p class="abt-item-info">While JuanCart offers many conveniences, it requires a stable internet connection, and the inability to check product quality before purchase or to process payments via online banking can be limiting for some customers.</p>-->

                <!--    </div>-->


                <!--</div>-->
                
             

          

                
                
            </div>
            
            
            
             <div class="topProduct">

        <p class="tTopPro">Hood Best sellers</p>
        <div class="topProductGrid">
            <?php
                $sql = "SELECT prodImg, prodName, prodVolume, Description, prodPrice, prodVolume FROM tblproducts ORDER BY Sold DESC LIMIT 4";
                $result = $conn->query($sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $img = $row['prodImg'];
                    $name = $row['prodName'];
                    $variant = $row['prodVolume'];
                    // $Description = $row['Description'];
                    $price = $row['prodPrice'];
                    $variant_ = $row['prodVolume'];

                    echo "<div class='topProduct-item'>";
                        echo "<div class='topProduct-Img-item'>";
                            echo "<div class='topProduct-Img-item-con'>";
                                echo "<img class='topProductImg' src='../Products/resources/$img' onerror=\"this.src='../Products/thumbnail/NoImage.png'\">";
                            echo "</div>";
                        echo "</div>";
            
                        echo "<div class='topProduct-info'>";
                            echo "<p class='topProduct-item-name'>$name</p><br><br><br>";
                            echo "<p class='topProduct-item-weight'>$variant_</p> <br><br><br>";
                            ///echo "<p class='topProduct-item-description'>$Description</p>";
                            echo "<p class='topProduct-item-price'>₱ $price</p>";
                            if(!isset($_SESSION['userID']))
                                echo "<button class='topProduct-item-btn' data-product-name='$name' data-product-variant='$variant' onClick='alertMessage()'>Add to Cart</button>";
                            else
                                echo "<button class='topProduct-item-btn' data-product-name='$name' data-product-variant='$variant' onClick='addCartHomePage(this)'>Add to Cart</button>";
                        echo "</div>";
                    echo "</div>";

                }
                
                
            ?>
        </div>
        
    </div>






        </div>
        
    </div>

    <br><br>

    

    <?php include('../includesPHP/footer.php')?>


    <script src="../javascript/web.js"></script>

    <script>
        ScrollReveal({
             reset: true,
             distance: '60px' ,
             duration: 500,
             delay:50
             });

             ScrollReveal().reveal('.abt', { delay: 50 });
             ScrollReveal().reveal('.abt-title', { delay: 50, origin: 'left' });

             ScrollReveal().reveal('.abt-item', { delay: 300, origin: 'bottom' });
             ScrollReveal().reveal('.abt-item-img-con', { delay: 50, origin: 'right' });

             ScrollReveal().reveal('.abt-item2', { delay: 300, origin: 'right' });
             ScrollReveal().reveal('.abt-item-img-con2', { delay: 50, origin: 'left' });

             ScrollReveal().reveal('.abt-item3', { delay: 300, origin: 'bottom' });
             ScrollReveal().reveal('.abt-item-img-con3', { delay: 50, origin: 'right' });

    </script>
</body>
</html>