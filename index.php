<?php

include "function_db.php";
$marks=getResultSession();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Третьяк Визитка</title>
    <meta name="description" content="" />
    <link rel="stylesheet" href="tooplate-style.css" />
    <link rel="stylesheet" href="owl.css" />
    <link rel="stylesheet" href="lightbox.css" />
    <link rel="stylesheet" href="table-style.css" />
</head>

<body>
    <div id="page-wraper">
        <!-- Sidebar Menu -->
        <div class="responsive-nav">
            <i class="fa fa-bars" id="menu-toggle"></i>
            <div id="menu" class="menu">
                <i class="fa fa-times" id="menu-close"></i>
                <div class="container">
                    <div class="image">
                        <a href="#"><img src="images/my-off-photo.jpg" /></a>
                    </div>
                    <div class="author-content">
                        <h4>Третьяк</h4>
                        <span>Александр Витальевич</span>
                    </div>
                    <nav class="main-nav" role="navigation">
                        <ul class="main-menu">
                            <li><a href="#section1">Personal info</a></li>
                            <li><a href="#section2">Skills</a></li>
                            <li><a href="#section3">Marks</a></li>
                            <li><a href="#section4">Gallery</a></li>
                        </ul>
                    </nav>
                    <div class="copyright-text">
                        <p>
                            Tretyak Alex 2024<br>
                            ДонАУиГС
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <section class="section about-me" data-section="section1">
            <div class="container">
                <div class="top-header">
                    <img src="images/cod.jpg" />
                </div>
                <div class="section-heading">

                    <h2>Мой сайт-визитка</h2>
                    <div class="line-dec"></div>
                    <span>Всем привет, меня зовут Саня. На этом сайте вы узнаете немного информации обо мне. </span>
                    <section id="Skils" class="gray">
                    </section>
                </div>
                <div class="right-image-post">
                    <div class="row">

                        <div class="col-md-8">
                            <div class="left-text">
                                <h4>Немного обо мне</h4>
                                <p>После выпуска из школы я поступил в Горловский колледж промышленных технологий, где получил образование техника по компьютерным сетям. После чего решил, что это не должно являться пределом моих возможностей и карьеры, осознав всю необходимость получения высшего образования в схожей сфере деятельности. Так я принял решение поступать обучаться в Донецкую академию управления и государственной службы на направление подготовки 09.03.03 "Прикладная информатика". Сейчас мне 25 лет. Вечно молодой, вечно красивый. Женат! </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="right-image">
                                <img src="images/language-programming.jpg" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="left-image-post">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="left-image">
                                <img src="images/mem.jpg" />
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="right-text">
                                <h4>Мои увлечения</h4>
                                <p>Круг моих интересов очень обширный: начиная от приготовления вкусных блюд до программирования и сетевого администирирования. Также я регулярно интересуюсь выходом новых технологических решений в смартфонах.</p>
                                <p>С большм удовольствием изучаю Python и С#. В дальнейшем в планах изучить программирование на Unity, а также освоить Kali Linux.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="section skills" data-section="section2">
            <div class="container">
                <div class="section-heading">
                    <h2>Профессиональные навыки</h2>
                    <div class="line-dec"></div>
                    <span>Здесь представленн мой уровень развития в программирвании на разных языках.</span>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="skills-item">
                            <h4>С# — 30%</h4>
                            <p>Высокоуровневый язык, хорошо подходит для разработки игровых приложений. Unity работает на C#</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="skills-item">
                            <h4>Python — 40%</h4>
                            <p>Популярный язык программирования. "На Python можно написать что угодно"</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="skills-item">
                            <h4>HTML + CSS — 20%</h4>
                            <p>Язык текстовой разметки и коллекция стилей, верные спутники при написании web-страниц.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section marks" data-section="section3">
            <div class="container">
                <div class="section-heading">
                    <h2>Оценки</h2>
                    <div class="line-dec"></div>
                    <span>Здесь представленны результаты моей сессии.</span>
                </div>
               <table class="table table-striped">
            <thead><tn>Дисциплина</tn><tn>Баллы</tn></thead>
            <?php
            for($i=0; $i<count($marks); $i++)
            {
                $name=$marks[$i]["subject"];
                $ball=$marks[$i]["mark"];
                echo "<tr><td>$name</td><td>$ball</td></tr>";
            }
            ?>
        </table>
            </div>
        </section>


        <section class="section my-gallery" data-section="section4">
            <div class="container">
                <div class="section-heading">
                    <h2>Галерея</h2>
                    <div class="line-dec"></div>
                    <span>Немного галереи</span>
                </div>
                <div class="row">
                    <div class="isotope-wrapper">
                        <form class="isotope-toolbar">
                            <label>
                                <input type="radio" data-type="*" checked="" name="isotope-filter" />
                                <span>all</span>
                            </label>
                            <label>
                                <input type="radio" data-type="my photo" name="isotope-filter" />
                                <span>my photo</span>
                            </label>
                            <label>
                                <input type="radio" data-type="my work" name="isotope-filter" />
                                <span>my work</span>
                            </label>
                            <label>
                                <input type="radio" data-type="picture" name="isotope-filter" />
                                <span>picture</span>
                            </label>
                        </form>
                        <div class="isotope-box">
                            <div class="isotope-item" data-type="my photo">
                                <figure class="pictures">
                                    <img src="images/my-party.jpg" alt="это я" />
                                    <figcaption>
                                        <a href="images/my-party.jpg"
                                           data-lightbox="image-1"
                                           data-title="Саня"><i class="fa fa-search"></i></a>
                                        <h4>Вещь</h4>
                                        <span>надо же отдыхать</span>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="isotope-item" data-type="my photo">
                                <figure class="pictures">
                                    <img src="images/bolt.jpg" alt="это я" />
                                    <figcaption>
                                        <a href="images/bolt.jpg"
                                           data-lightbox="image-1"
                                           data-title="Саня"><i class="fa fa-search"></i></a>
                                        <h4>Вещь</h4>
                                        <span>нашёл так нашёл</span>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="isotope-item" data-type="my photo">
                                <figure class="pictures">
                                    <img src="images/look.jpg" alt="это я" />
                                    <figcaption>
                                        <a href="assets/images/look.jpg"
                                           data-lightbox="image-1"
                                           data-title="Стиль"><i class="fa fa-search"></i></a>
                                        <h4>Стиль</h4>
                                        <span>Программисты тоже ходят "на стиле"</span>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="isotope-item" data-type="picture">
                                <figure class="pictures">
                                    <img src="images/mems1.jpg" alt="Жизненно" />
                                    <figcaption>
                                        <a href="assets/images/mems1.jpg"
                                           data-lightbox="image-1"
                                           data-title="мемы"><i class="fa fa-search"></i></a>
                                        <h4>ТЫЖпрограмммист</h4>
                                        <span>вот так оно и получается</span>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="isotope-item" data-type="picture">
                                <figure class="pictures">
                                    <img src="images/mems2.jpg" alt="Жизненно" />
                                    <figcaption>
                                        <a href="assets/images/mems2.jpg"
                                           data-lightbox="image-1"
                                           data-title="мемы"><i class="fa fa-search"></i></a>
                                        <h4>Попробуй найди</h4>
                                        <span>работа не волк</span>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="isotope-item" data-type="picture">
                                <figure class="pictures">
                                    <img src="images/mems3.jpeg" alt="Жизненно" />
                                    <figcaption>
                                        <a href="assets/images/mems3.jpeg"
                                           data-lightbox="image-1"
                                           data-title="мемы"><i class="fa fa-search"></i></a>
                                        <h4>Определение</h4>
                                        <span>расставим все точки над и</span>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="isotope-item" data-type="my work">
                                <figure class="pictures">
                                    <img src="images/guessmelody.jpg" alt="Угадай мелодию" />
                                    <figcaption>
                                        <a href="images/guessmelody.jpeg"
                                           data-lightbox="image-1"
                                           data-title="Угадай мелодию"><i class="fa fa-search"></i></a>
                                        <h4>Перва игра</h4>
                                        <span>"Угадай мелодию"</span>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
    <!-- Scripts -->


    <script src="isotope.min.js"></script>
    <script src="owl-carousel.js"></script>
    <script src="lightbox.js"></script>
    <script src="custom.js"></script>
    <script>
        //according to loftblog tut
        $(".main-menu li:first").addClass("active");

        var showSection = function showSection(section, isAnimate) {
            var direction = section.replace(/#/, ""),
                reqSection = $(".section").filter(
                    '[data-section="' + direction + '"]'
                ),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $("body, html").animate(
                    {
                        scrollTop: reqSectionPos
                    },
                    800
                );
            } else {
                $("body, html").scrollTop(reqSectionPos);
            }
        };

        var checkSection = function checkSection() {
            $(".section").each(function () {
                var $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var currentId = $this.data("section"),
                        reqLink = $("a").filter("[href*=\\#" + currentId + "]");
                    reqLink
                        .closest("li")
                        .addClass("active")
                        .siblings()
                        .removeClass("active");
                }
            });
        };

        $(".main-menu").on("click", "a", function (e) {
            e.preventDefault();
            showSection($(this).attr("href"), true);
        });

        $(window).scroll(function () {
            checkSection();
        });
    </script>
</body>
</html>
