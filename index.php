<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Кинопоиск</title>
    <style type="text/css">
    	body {
    		background-color: #e6e6e6
    	}
    	.main {
    		background-color: white;
    		
    		margin-top: 50px;
    	}
    	.main h3 {
    		color: #f60;;
    	}
    </style>	
  </head>
  <body>
    <div class="" style="height: 100px; background-color: #444444">
    	<div class="container">
    		<div class="row">
	    		<div class="col-2">
	    			<img src="img\logo.png" class="w-100">
	    		</div>
	    		<div class="col-6 pt-4">
	    			<input type="" name="" placeholder="поиск на сайте" class="w-100">
	    		</div>
	    		<div class="col-4 pt-4 text-right" style="color: #c7c7c7">
	    			<h3>Войти</h3>
	    		</div>
    		</div>
    	</div>
    	<div class="col-6 mx-auto shadow-lg main px-0">
    	    <h3 class="text-center bg-success p-2">5 лучших фильмов</h3>
    		
    	    <div class="text-center"> <!-- Див для списка фильмов -->
                <?php 
                    $database = [
                        ["id" => 1, "name" => "Стражи галактики", "img" => "img/1.jpg", "down" => "Все в сборе: землянин Питер Квилл (Звездный Лорд), молчаливый громила Дракс, зеленокожая наемница Гамора, живое дерево Грут и говорящий енот. Герои не изменяют себе и с завидной регулярностью продолжают попадать в немыслимые ситуации, выпутываясь из них почти без ущерба (а иногда даже с пользой) для окружающих. На этот раз им предстоит раскрыть одну из самых главных тайн во всей Галактике: кто же на самом деле отец Питера Квилла?"],
                        ["id" => 2, "name" => "Трансформеры Эпоха Истребления", "img" => "img/2.jpg", "down" => "Автоботы и десептиконы оставили человечество собирать планету по кусочкам. Между тем группа могущественных бизнесменов и гениальных ученых пытается извлечь уроки из ошибок прошлого и улучшить технологии до такой степени, чтобы выйти за пределы контролируемого ранее. В это время другая группа — древних мощных трансформеров — берет Землю под прицел."],
                        ["id" => 3, "name" => "Капитан Марвел", "img" => "img/3.jpg", "down" => "После столкновения с враждующими инопланетными расами, пилот военно-воздушных сил Кэрол Дэнверс обретает суперсилу и становится неуязвимой. Героине предстоит совладать со своими новыми способностями, чтобы противостоять могущественному врагу."],
                        ["id" => 4, "name" => "Аквамен", "img" => "img/4.jpg", "down" => "Действие фильма разворачивается в необъятном и захватывающем подводном мире семи морей, а сюжет знакомит зрителей с историей происхождения получеловека-полуатланта Артура Карри и ключевыми событиями его жизни – теми, что заставят его не только столкнуться с самим собой, но и выяснить, достоин ли он быть тем, кем ему суждено… царем!"],
                        ["id" => 5, "name" => "Хеллбой", "img" => "img/5.jpg", "down" => "Близится час битвы Хеллбоя с Кровавой королевой, буквально собирающей себя по частям и жаждущей отомстить всему человечеству за века в заточении. Оказавшись в эпицентре столкновения миров людей и монстров, Хеллбой будет вынужден пройти через ад, чтобы предотвратить надвигающийся апокалипсис."]
                    ];
                ?>
                <?php
                    for ($i=0; $i < 6; $i++) {
                        echo "<h1>" . $database[$i]["id"] . " " . $database[$i]["name"] . "</h1>";
                        echo "<img src='" . $database[$i]["img"] . "' class='w-50'>";
                        echo "<p>" . $database[$i]["down"] . "</p>";
                    }
                ?>
    	    </div>
    	</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>