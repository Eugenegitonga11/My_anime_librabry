<?php

include "database.php";

$sql = "SELECT * FROM collection";

$result = mysqli_query($conn, $sql);

$sql = "SELECT * FROM thumb";

$result2 = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <a href="">Anime</a>
            <a href="">Characters</a>
            <a href="">Genre</a>
        </nav>
    </header>

    
    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        
        <div class="list">
        <?php
    while($info = $result -> fetch_assoc())
    {
    ?>
            <div class="item">
                <img src="<?php echo "{$info['image']}" ?>">
                <div class="content">
                    <div class="author"><?php echo "{$info['author']}" ?><!--CODEPIE--></div>
                    <div class="title"><?php echo "{$info['title']}" ?><!--DEMON SLAYER--></div>
                    <div class="topic"><?php echo "{$info['topic']}" ?><!--ACTION :DRAMA--></div>
                    <div class="des"><?php echo "{$info['description']}" ?>
                        <!-- lorem 50 -->
                        <!-- Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?-->
                    </div>
                    <div class="buttons">
                    <button onclick="window.location.href='<?php echo $info['link']; ?>'">WATCH NOW</button>
                        <button onclick="window.location.href='<?php echo $info['link']; ?>'">DOWNLOAD</button>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
            <!-- <div class="item">
                <img src="image/juju.jpg">
                <div class="content">
                    <div class="author">LUNDEV</div>
                    <div class="title">JUJUSTU KAISEN</div>
                    <div class="topic">ACTION</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>WATCH NOW</button>
                        <button>DOWNLOAD</button>
                    </div>
                </div>
            </div> -->
            <!-- <div class="item">
                <img src="image/AOT.jpg">
                <div class="content">
                    <div class="author">LUNDEV</div>
                    <div class="title">ATTACK ON TITAN</div>
                    <div class="topic">WAR</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div> -->
            <!-- <div class="item">
                <img src="image/deathnote.jpg">
                <div class="content">
                    <div class="author">LUNDEV</div>
                    <div class="title">DEATH NOTE</div>
                    <div class="topic">DETECTIVE</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>WATCH NOW</button>
                        <button>DOWNLOAD</button>
                    </div>
                </div>
            </div> -->
            <!-- <div class="item">
                <img src="image/deathnote.jpg">
                <div class="content">
                    <div class="author">LUNDEV</div>
                    <div class="title">DEATH NOTE</div>
                    <div class="topic">DETECTIVE</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                    </div>
                    <div class="buttons">
                        <button>WATCH NOW</button>
                        <button>DOWNLOAD</button>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- list thumnail -->
        
        
        <div class="thumbnail">
        <?php
        while($info = $result2 -> fetch_assoc())
        {
        ?>
            <div class="item">
                <img  src="<?php echo "{$info['image']}" ?>">
                <div class="content">
                    <div class="title"><?php echo "{$info['title']}" ?>
                        <!-- Demon Slayer -->
                    </div>
                    <div class="description"><?php echo "{$info['define']}" ?>
                        <!--Despair-->
                    </div>
                </div>
            </div>
            <?php
    }
    ?>
            <!-- <div class="item">
                <img src="image/JJK.webp">
                <div class="content">
                    <div class="title">
                        Jujustu 
                    </div>
                    <div class="description">
                        Curses
                    </div>
                </div>
            </div> -->
            <!-- <div class="item">
                <img src="image/eren.jpg">
                <div class="content">
                    <div class="title">
                        A O T
                    </div>
                    <div class="description">
                        War
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="image/death.webp">
                <div class="content">
                    <div class="title">
                        Death Note
                    </div>
                    <div class="description">
                        Mind Game
                    </div>
                </div>
            </div> -->
            <!-- <div class="item">
                <img src="image/deathnote.jpg">
                <div class="content">
                    <div class="title">
                        Death Note
                    </div>
                    <div class="description">
                        Mind Game
                    </div>
                </div>
            </div> -->
        </div>
        
        <!-- next prev -->

        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- time running -->
        <div class="time"></div>
    </div>
    

    <script src="app.js"></script>
</body>
</html>