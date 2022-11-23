<!doctype html>
<html>

<head>
    <title>PersonalSite</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="wight-device-widht" initial-scale=1>
</head>

<body>
    <div class="intro">
        <div>
            <h1 id="opacAnimation" class="title-main">Шерстобитов Владислав<p>
                Web-developer
            </h1>
     


        </div>
        <div class="container">
            <img class="photo" src="img/person2.jpg" alt="Error img">
        </div>
    </div>
    <a href="#" ><button class="up">^</button></a>
    <div class="title_padding">
        <h1 class="title">Подробнее обо мне</h1>

    </div>
    <!-- accordion -->
    <div class="chapter"></div>

    <button class="accordion">Немного личной информации</button>
    <div class="panel">
        <p>Меня зовут Шерстобитов Владислав, мне 19 лет. Я родился 27 октября 2003 года, в России в городе под названием Белая Холуница.</p>
    </div>

    <button class="accordion">Чем я занимаюсь во время учебы</button>
    <div class="panel">
        <p>Учусь на 4 курсе колледжа ВятГУ по специальности Информационные системы и программирование. Живу в общежитии
            №1 от Колледжа ВятГУ. Параллельно с учёбой изучаю программирование. Учу язык C# и в рамках учебного курса
            C++, так же приходилось иметь дело с такими языками, как PascalABC, JavaScript</p>
    </div>

    <button class="accordion">Мои увлечения</button>
    <div class="panel">
        <p>В свободное время люблю активный отдых, а именно играть в баскетбол. Часто играю в компьютерные игры, смотрю
            ютуб (развлекательный, научный и контент который связан с моей учебой и профессией).</p>
    </div>
    <button class="accordion">Белая Холуница</button>
    <div class="panel">
        <p>Белая Холуница. Город основан в 1764 году в связи со строительством Новотроицкого Холуницкого (Белохолуницкого) железоделательного завода.</p> <p>Строительство завода требовало много рабочей силы. С этой целью будущий владелец завода Савва Яковлев купил несколько сотен крепостных крестьян в Новгородской и Вологодской губерниях.</p>
         Полагают, что именно по этой причине, у жителей Белой Холуницы до сих пор проскальзывает в разговорной речи «окающий» выговор, характерный для Вологодской губернии.<p>6 сентября 1764 года состоялось торжественное перекрытие реки и сооружение первой деревянной плотины. Впоследствии Белохолуницкий пруд неоднократно углубляли и расширяли.</p> 

            В 19-м веке центр Холуницкого горонозаводского округа. Работали женская школа кружевниц, школа плетения из ивы (корзины, дорожные сундуки, мебель). В 1861 году было завершено строительство крупной церкви Воскресения Христова, просуществовавшей до 1962 года. Сохранились здания, построенные в 1890-х годах.</p>
            <img class="img-sorce"  src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0a/0e/bf/cb/caption.jpg?w=1200&h=-1&s=1" height="600" alt="Error img">
    </div>

    <!-- projects -->
    
    <div class="title_padding">
        <h1 class="title">Проекты</h1>
        <div class="chapter">
            <div class="text">
                В рамках учебного курса работал над индивидуальным проектом под названием "Bilding firm".
                Проект был реализован на языке C# с использованием WinForms в IDE Visual Studio.
                Темой проекта является стротельная фирма, которая ведет учет сотрудников, поставщиков, заказов и
                проектов.<br><br>
                <a class="project_link" href="https://github.com/RIXRIP/Bilding_firm" target="_blank"> Ссылка на проект:
                    "Bilding firm"</a>
                <img class="simp_img" src="img/proj.jpg" alt="Error img">
                Так же в рамках учебного курса работал над коллективным проектом под названием "Bebragram".Проект был
                реализован на языке C# с использованием WPF в IDE Visual Studio.
                Темой этого проекта стал десктопный мессенджер. В этом проекте я занимался XAML разметкой. К сожалению
                проект не закончен.
                <br><br>
                <a class="project_link" href="https://github.com/RIXRIP/messenger-client" target="_blank"> Ссылка на
                    проект: "Bebragram"</a>
                <img class="simp_img" src="img/proj bebr.png" height="400" width="600" alt="Error img">
            </div>
        </div>
    </div> 


    <!-- ______________message______________ -->
    <h1 class="title">Отправьте мне сообщение!</h1>
     <form class="form_mail" name="connect" action="send.php" method="post">
        <textarea minlength="5" class="input-mes" type="text" placeholder="Введите ваше сообщение..."  name="login" required></textarea>
        <input class="send-btn" type="submit" value="Отправить" />
    </form>


    <!-- ________________social______________ -->
    <div class="title_padding">
        <h1 class="title">Контакты</h1>
        <div class="social_text">
            Здесь представлена контактная информация для связи со мной:
        </div>
        <div class="social">
            <a class="social-item" href="https://vk.com/id457654419" target="_blank">
                <img src="img/vk.png" height="120px" alt="i">
            </a>
            <a class="social-item" href="https://github.com/RIXRIP" target="_blank">
                <img src="img/github.png" height="120px" alt="i">
            </a>
            <a class="social-item" href="mailto:vlad.sherstobitov.00inbox.ru@gmail.com">
                <img src="img/email.png" height="120px" alt="i">
            </a>

        </div>
    </div>
    <footer>
        <div class="copyright">© Copyright 2022 by Sherstobitov Vladislav</div>
    </footer>

  

    <!-- при деплое на продакшен замените «development.js» на «production.min.js». -->
    <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>

    <script src="like_button.js"></script>
    <script src="js/main.js"></script>
</body>

</html>