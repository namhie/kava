<?php
/*
 * Template Name: Proekt Chat
 */

get_header(); ?>
<head>
	<meta charset="utf-8" />
	<title>X1 Team</title>
	<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/proekt-chat-style.css" /> </head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monttserat">
<script src="<?= get_template_directory_uri() ?>/assets/js/proekt-chat.js"></script>
<script src="https://use.fontawesome.com/ff2c90d65b.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!--Верхний контейнер-->
	<section>
		<div class="top-container">
			<div class="top-search-block">
					<img src="<?= get_template_directory_uri() ?>/assets/images/img/svg/menu.svg" id="menuBtn" class="menu-btn">
					
				<div class="text-field">
					<div class="text-field__icon">
						<input class="text-field__input_sidebar" type="search" name="search" id="search" placeholder="Поиск..."> 
						<span class="text-field__aicon">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
									<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
								</svg>
						</span> 
					</div>
				</div>
			</div>

				<div class="top-breadcrumb">
					<div>
						<ul class="breadcrumb">
							<li>
								<a href="#link">Главная /</a>
							</li>    
							<li>
								<a href="#link">Группы /</a>
							</li>
							<li>
								<a href="#link">Мои группы /</a>
							</li> 
							<li>
								<a href="#link">Сайты /</a>
							</li>   
							<li>
								X1team_dev
							</li>
						</ul>
						<span class="group-description">Закрытая группа  11 участников </span>
					</div>

					<div class="top-breadcrumb-btn">
						<img src="<?= get_template_directory_uri() ?>/assets/images/img/svg/search.svg" id="searchBtn" class="search-btn">
						<img src="<?= get_template_directory_uri() ?>/assets/images/img/svg/more_vert.svg" id="dotsBtn" class="dots-btn">
					</div>
				</div>
				 
		</div>
	</section>
    <!-- Конец -->

    <!-- Основной блок с контентом и фильтрами слева -->
	<section>
		<div class="top-container">
			<div class="left-sidbar-wrapper">

				<ul id="menu">
					<li>
						<a href="" class="active"><img src="<?= get_template_directory_uri() ?>/assets/images/img/svg/arrow-down.svg" alt="">Группы</a>
						
						<ul>
							<li><a>Сайт</a></li>
							<li><a>Город художников</a></li>
							<li><a>Искусственный интелект</a></li>
							<li><a>Еще...</a></li>
						</ul>
					</li>
					<li class="selected">
						<a href="" class="deactive"><img src="<?= get_template_directory_uri() ?>/assets/images/img/svg/arrow-down.svg" alt="">Сайт</a>
						<ul>
							<li><a>Услуги</a></li>
							<li><a>Услуги</a></li>
							<li><a>Услуги</a></li>
							<li><a>Услуги</a></li>
							<li><a>Услуги</a></li>
						</ul>
					</li>
					<li>
						<a href="" class="deactive"><img src="<?= get_template_directory_uri() ?>/assets/images/img/svg/arrow-down.svg" alt="">Мои подборки</a>
						<ul>
							<li><a>Подборка 1</a></li>
							<li><a>Подборка 2</a></li>
							<li><a>Подборка 3</a></li>
							<li><a>Подборка 4</a></li>
							<li><a>Подборка 5</a></li>
						</ul>
					</li>
				</ul>

                <!-- Вывод списка групп -->
                <div class="p_c_gorups-list">
                <?php
/**
 * BuddyPress - Groups Loop
 *
 * @since 3.0.0
 * @version 7.0.0
 */

bp_nouveau_before_loop(); ?>

<?php if ( bp_get_current_group_directory_type() ) : ?>
	<p class="current-group-type"><?php bp_current_group_directory_type_message(); ?></p>
<?php endif; ?>

<?php if ( bp_has_groups( bp_ajax_querystring( 'groups' ) ) ) : ?>

	<?php bp_nouveau_pagination( 'top' ); ?>

	<ul id="groups-list" class="p_c_item_container">

		<?php while ( bp_groups() ) : bp_the_group(); ?>

			<li class="p_c_item" data-bp-item-component="groups">
                	<div class="item-proekt-chat">
							<h2 class="list-title groups-title"><?php bp_group_link(); ?></h2>
					</div>
			</li>

		<?php endwhile; ?>

	</ul>

	<?php bp_nouveau_pagination( 'bottom' ); ?>

<?php else : ?>

	<?php bp_nouveau_user_feedback( 'groups-loop-none' ); ?>

<?php endif; ?>
                </div>
                <!-- Конец -->

                <!-- Примерная верстка для тэгов -->
				<div class="tags-wrapper"> 
					<a href="#" class="sidebar-tag">#заказы</a> 
					<a href="#" class="sidebar-tag">#готово</a> 
					<a href="#" class="sidebar-tag">#оплатить</a> 
					<a href="#" class="sidebar-tag">#понедельник</a> 
					<a href="#" class="sidebar-tag">#вторник</a> 
					<a href="#" class="sidebar-tag">#среда</a>
				</div>
			</div>
            <!-- Конец -->


			<div class="content">

            <!-- Блок добавления нового товара -->
				<div class="container-new-product">
					<div class="n_p_head">	
						<div>
							<input class="text-field__input_sidebar" type="search" name="search" id="search" placeholder="Заголовок">
						</div>
						<div>
							<input class="text-field__input_sidebar" type="search" name="search" id="search" placeholder="Цена">
						</div>

						<div>
							<div><a href="#" class="n_p_category">Категории</a></div>
							<span class="n_p_breadcrumb">//Каталог/Предложения</span>
						</div>

						<div>
							<span class="n_p_more">Еще</span>
						</div>
						<img src="<?= get_template_directory_uri() ?>/assets/images/img/svg/close.svg" id="closeBtn" class="close-message-btn">
					</div>

					<div class="n_p_foot">
						<div>
							<input class="text-field__input_sidebar" type="search" name="search" id="search" placeholder="Краткое описание">
						</div>

						<div>
							<button class="n_p_foot_btn_add">Откликнуться<br>новым объявлением</button>
						</div>
					</div>
				</div>
            <!-- Конец --> 
<hr>
			<!-- Блок добавления новой группы -->
			<div class="container-new-group">
					<div>
						<input class="text-field__input_sidebar" type="search" name="search" id="search" placeholder="Введите название группы, имя участника, товар в описании группы или тег">
					</div>

					<div class="n_g_head">
						<div>
							<div>
								<ul class="breadcrumb">
									<li>
										<a href="#link">Главная /</a>
									</li>    
									<li>
										<a href="#link">Группы /</a>
									</li>
									<li>
										<a href="#link">Мои группы /</a>
									</li> 
									<li>
										<a href="#link">Сайты /</a>
									</li>   
									<li>
									<input class="text-field__input_group_name" type="search" name="search" placeholder="Введите название">
									</li>
								</ul>
							</div>
							
							<div>
								<a href="#" class="n-g-members">Участники:</a>
								<a href="#" class="n-g-members-tag">Петров</a>
								<a href="#" class="n-g-members-tag">Сидоров</a>
								<button class="n-g-members-add">Добавить</button>
							</div>

							<div>
								<a href="#" class="n-g-comments">Обсудить и ответить на вопросы Бота</a>
								
							</div>
						</div>	

						<div>
							<button class="n_p_foot_btn_add">Создать<br>новую группу</button>
						</div>
					</div>

					<div class="n_g_foot">
					</div>
				</div>
            <!-- Конец -->

            <!-- Верстка вывода товара в группе -->
				<div class="post-wrapper">

					<div class="post-image-block">
						<span class="post-author"><a href="#">@Виктор Проскурин</a></span>
						<img src="<?= get_template_directory_uri() ?>/assets/images/img/post-img.jpg" class="post-img">	
							<div class="po-comments-btn">
								<img src="<?= get_template_directory_uri() ?>/assets/images/img/svg/add_comment-white.svg">
								<span class="po-comments-number">11</span>
							</div>
					</div>

					<div class="post-descriprion-block">
							
						<div class="post-date-block">
							<div><span class="post-author">03.07.2022</span></div>
							<div><img src="<?= get_template_directory_uri() ?>/assets/images/img/svg/horizontal-dots.svg" id="dotsPostBtn" class="dots-btn"></div>
						</div>
						
						<div class="post-description">

							<div>
								<h3>РАЗРАБОТКА САЙТА ОТЕЛЯ</h3>
								<p>
									Команда X1 Team
									От лендинга до искусственного интеллекта. 
									Готовые решения и исполнители собраны в большой проект 
								</p>
							</div>

							<div>
								<div class="post-price"><span class="old-price">40 000₽</span>36 000₽</div>
								<div>
									<button class="tocart"><i class="fa fa-shopping-cart"></i> В корзину</button>
								</div>
							</div>
						
						</div>

					</div>
				</div>

            <!-- Конец -->

            <!-- Верстка вывода товара в группе -->
			<div class="product-container">
				<div class="icon-block">
					<img src="<?= get_template_directory_uri() ?>/assets/images/img/svg/add_comment.svg" class="forum-btn">
					<span class="pr-comments-number">11</span>
				</div>
				
				<div class="pr-img">
					<img src="<?= get_template_directory_uri() ?>/assets/images/img/product-img.png" class="pr-img">
				</div>
				
				<div class="pr-description-container">
					<h3 class="pr-heading">Контекстная реклама</h3>
					<div class="pr-description">Настройка контекстной рекламы в Яндекс. Директ...</div>
				</div>

				<div>
					<div class="post-price"><span class="old-price">40 000₽</span>36 000₽</div>
					<div>
						<button class="tocart"><i class="fa fa-shopping-cart"></i> В корзину</button>
					</div>
				</div>
			</div>

			<div class="product-container">
				<div class="icon-block">
					<img src="<?= get_template_directory_uri() ?>/assets/images/img/svg/add_comment.svg" class="forum-btn">
					<span class="pr-comments-number">11</span>
				</div>
				
				<div class="pr-img">
					<img src="<?= get_template_directory_uri() ?>/assets/images/img/product-img.png" class="pr-img">
				</div>
				
				<div class="pr-description-container">
					<h3 class="pr-heading">Контекстная реклама</h3>
					<div class="pr-description">Настройка контекстной рекламы в Яндекс. Директ...</div>
				</div>

				<div>
					<div>
						<button class="tocart">Подробнее</button>
					</div>
				</div>
			</div>
			<!-- Конец -->

				<div class="post-wrapper">

					<div class="post-image-block">
						<span class="post-author"><a href="#">@Виктор Проскурин</a></span>
						<img src="<?= get_template_directory_uri() ?>/assets/images/img/post-img.jpg" class="post-img">	
					</div>

					<div class="post-descriprion-block">
							
						<div class="post-date-block">
							<div><span class="post-author">03.07.2022</span></div>
							<div><img src="<?= get_template_directory_uri() ?>/assets/images/img/svg/horizontal-dots.svg" id="dotsPostBtn" class="dots-btn"></div>
						</div>
						
						<div class="post-description">

							<div>
								<h3>РАЗРАБОТКА САЙТА ОТЕЛЯ</h3>
								<p>
									Команда X1 Team
									От лендинга до искусственного интеллекта. 
									Готовые решения и исполнители собраны в большой проект 
								</p>
							</div>

							<div>
								<div class="post-price"><span class="old-price">40 000₽</span>36 000₽</div>
								<div>
									<button class="tocart"><i class="fa fa-shopping-cart"></i> В корзину</button>
								</div>
							</div>
						
						</div>

					</div>
				</div>

				<div class="post-wrapper">

					<div class="post-image-block">
						<span class="post-author"><a href="#">@Виктор Проскурин</a></span>
						<img src="<?= get_template_directory_uri() ?>/assets/images/img/post-img.jpg" class="post-img">	
					</div>

					<div class="post-descriprion-block">
							
						<div class="post-date-block">
							<div><span class="post-author">03.07.2022</span></div>
							<div><img src="<?= get_template_directory_uri() ?>/assets/images/img/svg/horizontal-dots.svg" id="dotsPostBtn" class="dots-btn"></div>
						</div>
						
						<div class="post-description">

							<div>
								<h3>РАЗРАБОТКА САЙТА ОТЕЛЯ</h3>
								<p>
									Команда X1 Team
									От лендинга до искусственного интеллекта. 
									Готовые решения и исполнители собраны в большой проект 
								</p>
							</div>

							<div>
								<div class="post-price"><span class="old-price">40 000₽</span>36 000₽</div>
								<div>
									<button class="tocart"><i class="fa fa-shopping-cart"></i> В корзину</button>
								</div>
							</div>
						
						</div>

					</div>
				</div>

			</div>
		</div>
	</section>

    <!-- Верстка блока отправки сообщений -->
	<section class="messenger-fixed">
		<div class="messenger-container">
				<div class="messenger-block">
					
						<div class="messenger-functions">
							<div class="message-container">
								<div class="icon-block">
									<img src="<?= get_template_directory_uri() ?>/assets/images/img/svg/forum.svg" id="forumBtn" class="forum-btn">
								</div>
								<div class="message-reply"> 
									<div class="message-reply-img">
										<img src="<?= get_template_directory_uri() ?>/assets/images/img/reply.jpg" class="message-img">
									</div>
									
									<div>
										<span class="mes-product-heading">Доля в проекте X1</span><br>
										<div class="mes-product-description">Доля в проекте X1	Каждый оплаченный инвестором рубль равен двум бонусным рублям ...</div>
									</div>
								</div>
							</div>

							<div>
								<a class="message-btn-predlozhit">Предложить</a>
								<div class="vertical-line"></div>
								<a class="message-btn-zakaz">Заказать</a>
							</div>

							<img src="<?= get_template_directory_uri() ?>/assets/images/img/svg/close.svg" id="closeBtn" class="close-message-btn">
						</div>

						<div class="text-field__icon">
							<input class="text-field__input" type="search" name="search" id="search" placeholder="Введите свой комментарий"> 
								<span class="text-field_icons">
									<img src="<?= get_template_directory_uri() ?>/assets/images/img/svg/send.svg" id="sendMessage" class="send-message-btn">
								</span> 
								<span class="text-field_icons_left">
									<img src="<?= get_template_directory_uri() ?>/assets/images/img/svg/attach_file.svg" id="attachFile" class="attach-btn">
									<img src="<?= get_template_directory_uri() ?>/assets/images/img/svg/message_add.svg" id="emojiBtn" class="emoji-btn">
									<img src="<?= get_template_directory_uri() ?>/assets/images/img/svg/message_add_1.svg" id="sendMessage" class="send-message-btn">
								</span> 
						</div>
					
				</div>
		</div>
	</section>
    <!-- Конец -->

</body>

<?php get_footer();
