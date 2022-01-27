<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Liver Studio</title>
        <link rel="stylesheet" href="stylephp.css">
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
            <div id="screen1img"  style="margin-right:-380px"> 
                <div id="iphone12">
                <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_yewren5b.json"  background="transparent"  speed="1"  style=" margin-top:-50px ;height: 700px; width:300px; z-index:101; margin-right:-500px;" autoplay></lottie-player></div>
            </div>
        </div>
        <div class="screen2">
            <div id="frame2headertext"><h1>Чем мы занимаемся</h1></div>
            <div id="frame2wrapper">
                <div id='frame2text'>
                    <div id='sites'>
                        <h1>Сайты</h1>
                        <p>Корпоративные Сайты</p><p>Промо сайты</p><p>Интернет магазины</p>
                    </div>
                 <div id='apps'>
                        <h1>Приложения</h1>
                        <p>Разработка для Android и iOS</p><p>Frontend и Backend разработка</p>
                    </div>
                    <div id='identic'>
                        <h1>Айдентика</h1>
                        <p>Логотипы</p><p>Брендбуки</p><p>Фирменный стиль</p>
                    </div>        
                    <img id='sitesimg'src='img/Сайты.png'>
                    <img id='appsimg'src='img/Приложения.png'>
                    <img id='identicimg' src='img/Айдентика.png'>
                </div>
            </div>
            <div id="frame2imgs">
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
                        <h3>Identity    UX/UI    Frontend Backend</h3>
                        <h2>B2b приложение 
                           <p></p> для поддерживания здоровья</h2>
                           <P>Создали дизайн-систему и интерфейсы 
                            для продуктов платформы, разработали мобильное приложение</P>
                    </div>
                </div>
                <div id="ulula">
                    <img src="img/Улула.png" id="ululaimg" alt="">
                    <div id="ululatext">
                        <h3>UX/UI    Identity</h3>
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
                    <div id="winswrapperimg"><img id="vk" src="img/ВекторВк.svg" alt=""><img id="vkhover" src='img/ВекторВкПриНаведении.svg'> </div>
                    <div id="winswrapperimg1"><img id="mpit" src="img/ЛогоМПИТ.png" alt=""><img id="mpithover" src="img/ЛогоМпитПриНаведении.png"></div>
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
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>
</html>