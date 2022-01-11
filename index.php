<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Liver Studio</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div id="wrapper">
        <div id="header">
            <div>
            <img id="icon" src="img/ЛогоСтудии.svg">
            </div>
            <div id="start">
                <div id="starttext">
                <p style="color: white;">Оставить заявку</p>
                </div>
            </div>
        </div>
        <div id="screen1">
            <div id="screen1text"><h1>Digital проекты</h1><p id="miniscreen1text">Мы создаем стильные и современные решения</p></div>
            <div id="screen1img"> 
                <img id="frame1" src="img/Group 298.jpg">
            </div>
        </div>
        <div id="screen2">
            <h1 id="screen2headertext">Чем мы занимаемся</h1>
            <div id="screen2wrapper">
                <div id="computer"><a id="computera"><h1>Сайты</h1></a><div id="stuff"><p>Корпаративные сайты</p><p>Промо сайты</p><p>Интернет магазины</p></div><span><img src="img/Сайты.png" alt=""></span></div>
                <div id="phone"><a id="phonea"><h1>Приложения</h1></a><div id="stuff"><p>Разработка для Android и iOS</p><p>Frontend и Backend разработка</p></div><span><img src="img/Приложения.png" alt=""></span></div>
                <div id="fire"><a id="fireas"><h1>Айдентика</h1></a></id><div id="stuff"><p>Логотипы</p><p>Брендбуки</p><p>Фирменный стиль</p></div><span><img src="img/Айдентика.png" alt=""></span></div>
            </div>
        </div>
        <div id="screen3">
            <h1>Кейсы</h1>
            <div id="screen3wrapper">
                <div id="lenaturflot">
                    <img src="img/Ленатурфлот.png" alt="">
                    <div id="lenaturflottext">
                        <h3>UX/UI</h3>
                        <h2>Редизайн сайта Ленатурфлот</h2>
                        <p>Мы сделали дизайн более современным 
                        и сайт удобным, использовав фирменные элементы</p>
                    </div>
                </div>
                <div id="b2b">
                    <img src="img/iPhone 12 Pro Max.jpg" alt="">
                    <div id="b2btext">
                        <h3>Identity  UX/UI Frontend Backend</h3>
                        <h2>B2b приложение 
                           <p></p> для поддерживания здоровья</h2>
                           <P>Создали дизайн-систему и интерфейсы 
                            для продуктов платформы, разработали мобильное приложение</P>
                    </div>
                </div>
                <div id="ulula">
                    <img src="img/Улула.png" id="ululaimg" alt="">
                    <div id="ululatext">
                        <h3>UX/UI  Identity</h3>
                        <h2>Лендинг для платформы <p></p>
                            по повышению квалификации</h2>
                            <p>Создали дизайн для продающего лендинга,<p></p> который рассказывает о компании, её подходе <p></p>
                                к работе, услугах</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="banner">
            ,<div id="bannertext"><h1 style="color: white;">Есть идеи?</h1><p style="color: white;">давайте обсудим</p></div>
            <div id="bannerstart"><div id="starttext"><p style="color: #1FC8BF;">Оставить заявку</p></div></div>
        </div>
        <div id="roadmap">
            <h1>Процесс работы</h1>
            <img src="img/Процесс работы.svg">
        </div>
        <div id="wins">
            <div id="shit">
                <h1 id='winsh1'style="color: white;">Наши победы</h1>
                <div id="winswrapper">
                    <div id="winswrapperimg"><img src="img/ВекторВк.svg" alt=""></div>
                    <div id="winswrapperimg"><img src="img/ЛогоМПИТ.png" alt=""></div>
                </div>
            </div>
                <div id="winstext1"><h1 style="color: white;">1 место</h1><p style="color: white;">Хакатон</p><p style="color: white;">Вконтакте 2020</p></div>
                <div id="winstext2"><h1 style="color: white;">1 место</h1><p style="color: white;"> МПИТ-2021</p><p style="color: white;">Якутск</p></div>                 
            </div>
        
        </div>
        <div id="tellus">
            <div id="form">
                <form action="send.php" method="post" id="form">
                    <p id="nametext">Имя</p>
                    <input type="text" name="name" required id='name'>
                    <p id="companytext">Название компании</p>
                    <input type="text" name="company" required id='company'>
                    <p id="emailtext">E-mail</p>
                    <input type="text" name="email" required id='email'>
                    <p id="desctext">Описание</p>
                    <input type="text" name="description" required id='desc'>
                    <input type="submit" name="send" id="button">
                </form>
            </div>
        </div>
        <div id="footer">
            <div id="footertext">
                    <h1 style="color: white;"><a href="mailto:liver.multimedia@gmail.com" style="text-decoration:none; color: white;">liver.multimedia@gmail.com</a></h1><p style="color: white;">&#169 Liver Studio 2020-2022</p><p style="color: white;"><a href="" style="color: white;">Политика конфиденциальности</a></p>
            </div>
            <img src="img/Котик.svg" alt="">
        </div>
    </div>
    <script src="script.js"></script>
    </body>
</html>