
<?php $debug = false;?>

<?php 
include("configuration.php");
include("php/dateformatter.php");?>
<?php 
    $all_plan = array(
        'title' => 'Deutsch',
        'date' => $array_date,
        'todo' => 'Würfelspiel </br> Singen',
        'material' => 'Würfel </br> Singbuch',
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stundenplaner</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.typekit.net/iuz1kyi.css">
    <link rel="stylesheet" href="https://use.typekit.net/iuz1kyi.css">
                <!-- 
                font-family: poppins, sans-serif;
                font-weight: 200, 300, 400, 700;
                font-style: noraml, italic;


                font-family: mr-eaves-xl-modern, sans-serif;
                font-weight: 200, 300, 400 700;
                font-style: normal, italic;  -->

    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>

    <script defer src="javascript/navigation.js"></script>
    <script defer src="javascript/plan-slider.js"></script>
</head>

<body id="stundenplaner-body">
    <?php include("nav.php");?>

    
    <main class="stundenplaner-content-section">

        <div class="slideshow-container">

        <!-- erster Slider-->
            <div class="slide fade">
                <div class="plan">
                    <!-- Plan für ersten Tag im Slider-->
                    <div class="plan-head">
                        <h3 class="plan-date"><?php echo $array_date[0]?></h3>
                    </div>


                    <div class="plan-content">
                        <div class="plan-lesson">
                            <h1 class="lesson-title">Deutsch</h1>
                            <!-- Loop für Lesson Content -->
                            <div class="lesson-content">
                                <div>
                                    <p class="title">Inhalt der Lektion</p>
                                    <p class="todo">· Würfel Spiel </br>· Lied singen </br>· vom Wochenende erzählen</p>
                                </div>
                                <div>
                                    <p class="title">Material der Lektion</p>
                                    <p class="material">· Würfel </br>· Liederheft </br>· Scheren</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="plan-edit">
                        <p class="add-plan" style="margin-right: auto;"><i class="fa-regular fa-plus"></i>Lektion hinzufügen</p>
                        <p class="edit-plan"><i class="fa-solid fa-pen-to-square"></i>bearbeiten</p>
                        <p class="delete-plan"><i class="fa-solid fa-trash"></i>löschen</p>
                    </div>
                </div>

                <!-- Plan für zweiten Tag im Slider-->
                <div class="plan">
                    <div class="plan-head">
                        <h3 class="plan-date"><?php echo $array_date[1]?></h3>
                    </div>


                    <div class="plan-content">
                        <div class="plan-lesson">
                            <h1 class="lesson-title">Deutsch</h1>
                            <!-- Loop für Lesson Content -->
                            <div class="lesson-content">
                                <div>
                                    <p class="title">Inhalt der Lektion</p>
                                    <p class="todo">· Würfel Spiel </br>· Lied singen </br>· vom Wochenende erzählen</p>
                                </div>
                                <div>
                                    <p class="title">Material der Lektion</p>
                                    <p class="material">· Würfel </br>· Liederheft </br>· Scheren</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="plan-edit">
                        <p class="add-plan" style="margin-right: auto;"><i class="fa-regular fa-plus"></i>Lektion hinzufügen</p>
                        <p class="edit-plan"><i class="fa-solid fa-pen-to-square"></i>bearbeiten</p>
                        <p class="delete-plan"><i class="fa-solid fa-trash"></i>löschen</p>
                    </div>
                </div>
            </div>



            <!-- zweiter Slider-->
            <div class="slide fade">
                <div class="plan">
                    <!-- Plan für ersten Tag im Slider-->
                    <div class="plan-head">
                        <h3 class="plan-date"><?php echo $array_date[2]?></h3>
                    </div>


                    <div class="plan-content">
                        <div class="plan-lesson">
                            <h1 class="lesson-title">Deutsch</h1>
                            <!-- Loop für Lesson Content -->
                            <div class="lesson-content">
                                <div>
                                    <p class="title">Inhalt der Lektion</p>
                                    <p class="todo">· Würfel Spiel </br>· Lied singen </br>· vom Wochenende erzählen</p>
                                </div>
                                <div>
                                    <p class="title">Material der Lektion</p>
                                    <p class="material">· Würfel </br>· Liederheft </br>· Scheren</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="plan-edit">
                        <p class="add-plan" style="margin-right: auto;"><i class="fa-regular fa-plus"></i>Lektion hinzufügen</p>
                        <p class="edit-plan"><i class="fa-solid fa-pen-to-square"></i>bearbeiten</p>
                        <p class="delete-plan"><i class="fa-solid fa-trash"></i>löschen</p>
                    </div>
                </div>
                
                <!-- Plan für zweiten Tag im Slider-->
                <div class="plan">
                    <div class="plan-head">
                        <h3 class="plan-date"><?php echo $array_date[3]?></h3>
                    </div>


                    <div class="plan-content">
                        <div class="plan-lesson">
                            <h1 class="lesson-title">Deutsch</h1>
                            <!-- Loop für Lesson Content -->
                            <div class="lesson-content">
                                <div>
                                    <p class="title">Inhalt der Lektion</p>
                                    <p class="todo">· Würfel Spiel </br>· Lied singen </br>· vom Wochenende erzählen</p>
                                </div>
                                <div>
                                    <p class="title">Material der Lektion</p>
                                    <p class="material">· Würfel </br>· Liederheft </br>· Scheren</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="plan-edit">
                        <p class="add-plan" style="margin-right: auto;"><i class="fa-regular fa-plus"></i>Lektion hinzufügen</p>
                        <p class="edit-plan"><i class="fa-solid fa-pen-to-square"></i>bearbeiten</p>
                        <p class="delete-plan"><i class="fa-solid fa-trash"></i>löschen</p>
                    </div>
                </div>
            </div>



            <!-- dritter Slider-->
            <div class="slide fade">
                <div class="plan">
                    <!-- Plan für ersten Tag im Slider-->
                    <div class="plan-head">
                        <h3 class="plan-date"><?php echo $array_date[4]?></h3>
                    </div>


                    <div class="plan-content">
                        <div class="plan-lesson">
                            <h1 class="lesson-title">Deutsch</h1>
                            <!-- Loop für Lesson Content -->
                            <div class="lesson-content">
                                <div>
                                    <p class="title">Inhalt der Lektion</p>
                                    <p class="todo">· Würfel Spiel </br>· Lied singen </br>· vom Wochenende erzählen</p>
                                </div>
                                <div>
                                    <p class="title">Material der Lektion</p>
                                    <p class="material">· Würfel </br>· Liederheft </br>· Scheren</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="plan-edit">
                        <p class="add-plan" style="margin-right: auto;"><i class="fa-regular fa-plus"></i>Lektion hinzufügen</p>
                        <p class="edit-plan"><i class="fa-solid fa-pen-to-square"></i>bearbeiten</p>
                        <p class="delete-plan"><i class="fa-solid fa-trash"></i>löschen</p>
                    </div>
                </div>
                
                <!-- Plan für zweiten Tag im Slider-->
                <div class="plan">
                    <div class="plan-head">
                        <h3 class="plan-date"><?php echo $array_date[5]?></h3>
                    </div>


                    <div class="plan-content">
                        <div class="plan-lesson">
                            <h1 class="lesson-title">Deutsch</h1>
                            <!-- Loop für Lesson Content -->
                            <div class="lesson-content">
                                <div>
                                    <p class="title">Inhalt der Lektion</p>
                                    <p class="todo">· Würfel Spiel </br>· Lied singen </br>· vom Wochenende erzählen</p>
                                </div>
                                <div>
                                    <p class="title">Material der Lektion</p>
                                    <p class="material">· Würfel </br>· Liederheft </br>· Scheren</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="plan-edit">
                        <p class="add-plan" style="margin-right: auto;"><i class="fa-regular fa-plus"></i>Lektion hinzufügen</p>
                        <p class="edit-plan"><i class="fa-solid fa-pen-to-square"></i>bearbeiten</p>
                        <p class="delete-plan"><i class="fa-solid fa-trash"></i>löschen</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Pfeile -->
        <div class="slider-arrows">
            <a class="prev" onclick="previousSlide()">❮</a>
            <a class="next" onclick="nextSlide()">❯</a>
        </div>
    </main>


</body>
</html>