<? if($_POST["submit"]) 
{ 
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];

    $firstName = htmlspecialchars($firstName);
    $lastName = htmlspecialchars($lastName);

    $firstName = urldecode($firstName);
    $lastName = urldecode($lastName);

    $firstName = trim($firstName);
    $lastName = trim($lastName);

    echo $fifirstNameo;
    echo "<br>";
    echo $lastName;
    if (mail("july_ss@mail.ru", "Заявка с сайта", "ФИО:".$firstName.". E-mail: ".$lastName ,"From: july.ss0206@gmail.com \r\n"))
    {     echo "сообщение успешно отправлено";
    } else {
        echo "при отправке сообщения возникли ошибки";
    }
}?>
<!DOCTYPE html>
<html  lang="ru">
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <!-- <link href="https://fonts.googleapis.com/css2?family=Marck+Script&family=Montserrat:wght@100&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css2?family=Marck+Script&family=Poiret+One&family=Josefin+Slab&family=Raleway:wght@100&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <title>Приглашение</title>
        <script src="scripts/script.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/inputStyle.css">
        
    </head>
    <body>
        <!-- <section class="color_block">
            <div class="color_0"></div>
            <div class="color_2"></div>
            <div class="color_5"></div>
            <div class="color_4"></div>
            <div class="color_3"></div>
            <div class="color_1"></div>
            <div class="color_6"></div>
        </section> -->
        <main>
            <section class="header-wrapper">
                <nav>
                    <a href="">О нас</a>
                    <a href="">Программа</a>
                    <a href="">Приглашение</a>
                    <a href="">Фото</a>
                    <a href="">Как добраться</a>
                </nav>
                <div class="main_content">
                    <h1>Юлия & Александр</h1>
                    <h3>наша свадьба состоится 14 августа 2021 г.</h3>
                    <div class="time_block">
                        <div id="current_date_time_block"></div>
                    </div>
                </div>
            </section>
            <section class="about_us">
                <div class="about_us_block">
                    <div class="individually_description">
                        <img src="img/alex2.png" alt="">
                        <p>Юлия</p>
                    </div>
                    <div class="individually_description">
                        <img src="img/alex3.png" alt="">
                        <p>Александр</p>
                    </div>
                </div>
                <!-- <img src="img/background1.jpg" alt=""> -->
            </section>

            <section class="programm">
                <h3>Программа</h3>
                <div>
                    <div class="programm_block">
                        <div class="programm_date">
                            <p>12 августа 2021</p>
                            <p> 11:40 </p>
                        </div>
                        
                        <div class="programm_point"></div>
                        <div class="programm_text">
                            <p> Регистрация в ЗАГСе </p>
                            <p> ул. Космонавтов, 2</p>
                        </div>
                    </div>

                    <div class="programm_block">
                        <div class="programm_date">
                            <p>14 августа 2021</p>
                            <p> 16:00 </p>
                        </div>
                        
                        <div class="programm_point"></div>
                        <div class="programm_text">
                            <p> Выездная церемония </p>
                            <p> ул. Неделина, 15В, р. Антонио</p>
                        </div>
                    </div>

                    <div class="programm_block">
                        <div class="programm_date">
                            <p>14 августа 2021</p>
                            <p> 17:00 </p>
                        </div>
                        
                        <div class="programm_point"></div>
                        <div class="programm_text">
                            <p> Банкет </p>
                            <p> ул. Неделина, 15В, р. Антонио</p>
                        </div>
                    </div>
                    
                </div>
            </section>

            <section class="invitation">
                <h3>Приглашение</h3>
                <p>
                    Мы рады сообщить Вам, что 14.08.2021 состоится самое главное торжество в нашей жизни - день нашей свадьбы!
                    <br><br>
                    Приглашаем Вас разделить с нами радость этого незабываемого дня.
                    <br><br>
                    Ждем вас
                    <br><br>
                    14.08.2021 в 16.00
                    <br><br>
                    Будем благодарны, если при выборе нарядов на наше торжество вы придержитесь следующей палитры
                </p>
                <div class="block_color">
                    <div class="color_0"></div>
                    <div class="color_2"></div>
                    <div class="color_5"></div>
                    <div class="color_7"></div>
                    <div class="color_4"></div>
                    <div class="color_3"></div>
                    <div class="color_1"></div>
                    <div class="color_6"></div>
                </div>
            </section>

            <section class="form_data">
                <form method="POST">
                    <div class="come_block">
                        <input type="radio" name="come" id="come" value="я_приду">
                        <label for="come">
                            Конечно, мы будем!
                        </label>

                        <input type="radio"  name="come" id="notСome" value="я_не_приду">
                        <label for="notСome">
                            Мы не придем
                        </label>
                    </div>

                    <div class="block_form_edit">
                        <input class="input_name" type="text" name="firstName" placeholder="Имя" required>
                        <input class="input_name" type="text" name="lastName" placeholder="Фамилия" required>

                        <div class="question">
                            <p>Есть ли у вас особые предпочтения по еде?</p>
                            <div class="radio_block">
                                <input id="food1" type="radio" name="food" value="нет">
                                <label for="food1" class="radio_button"> Нет </label>
                            </div>
                            <div class="radio_block">
                                <input id="food2" type="radio" name="food" value="не ем мясо">
                                <label for="food2" class="radio_button"> Не ем мясо </label>
                            </div>
                            <div class="radio_block">
                                <input id="food3" type="radio" name="food" value="не ем рыбу">
                                <label for="food3" class="radio_button"> Не ем рыбу </label>
                            </div>
                            <div class="radio_block">
                                <input id="food4" type="radio" name="food" value="Вегетарианец">
                                <label for="food4" class="radio_button"> Вегетарианец </label>
                            </div>
                        </div>

                        <div class="question">
                            <p> Какой алкоголь вы предпочитаете?</p>
                            <div class="radio_block">
                                <input id="alcohol1" type="radio" name="not_alcohol">
                                <label for="alcohol1" class="radio_button"> Не буду пить алкоголь </label>
                            </div>
                            <div class="radio_block">
                                <input id="alcohol2" type="radio" name="champagne">
                                <label for="alcohol2" class="radio_button"> Шампанское</label>
                            </div>
                            <div class="radio_block">
                                <input id="alcohol3" type="radio" name="Wine">
                                <label for="alcohol3" class="radio_button"> Вино </label>
                            </div>
                            <div class="radio_block">
                                <input id="alcohol6" type="radio" name="Cocktails">
                                <label for="alcohol6" class="radio_button"> Коктейли </label>
                            </div>
                            <div class="radio_block">
                                <input id="alcohol4" type="radio" name="Whiskey_cognac">
                                <label for="alcohol4" class="radio_button"> Виски/коньяк </label>
                            </div>
                            <div class="radio_block">
                                <input id="alcohol5" type="radio" name="Vodka">
                                <label for="alcohol5" class="radio_button"> Водка </label>
                            </div>
                        </div>
                        <div class="__select" data-state="Я буду один">
                            <div class="__select__title" data-default="Я буду один"> Я буду один </div>
                            <div class="__select__content">
                                <input id="singleSelect0" class="__select__input" type="radio" name="singleSelect" checked />
                                <label for="singleSelect0" class="__select__label"> Я буду один </label>
                                <input id="singleSelect1" class="__select__input" type="radio" name="singleSelect" />
                                <label for="singleSelect1" class="__select__label"> Один гость </label>
                                <input id="singleSelect2" class="__select__input" type="radio" name="singleSelect"/>
                                <label for="singleSelect2" class="__select__label"> Два гость </label>
                                <input id="singleSelect3" class="__select__input" type="radio" name="singleSelect" />
                                <label for="singleSelect3" class="__select__label"> Три гость </label>
                                <input id="singleSelect4" class="__select__input" type="radio" name="singleSelect" />
                                <label for="singleSelect4" class="__select__label"> Четыре гость </label>
                            </div>
                        </div>

                    </div>

                    <input type="submit" name="submit" value="ertyuiop;lkjhgvbhnjmk,"> 
                    <!-- Подтвердить </button> -->
                </form>
            </section>
            
        </main>
        <script src="scripts/select.js"></script>
    </body>
</html>