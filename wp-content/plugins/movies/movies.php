<?php
/*
Plugin Name: Movies
Description: Declares a plugin that will create a custom post type movies.
Version: 1.0
Author: Kurbatsky Sergey
License: GPLv2
*/

add_action( 'init', 'create_movie_section' );

function create_movie_section() {
	register_post_type( 'movies',
		array(
			'labels' => array(
				'name'               => 'Фильмы', // основное название для типа записи
				'singular_name'      => 'Фильм', // название для одной записи этого типа
				'add_new'            => 'Добавить фильм', // для добавления новой записи
				'add_new_item'       => 'Добавление фильма', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование фильма', // для редактирования типа записи
				'new_item'           => 'Новый фильм', // текст новой записи
				'view_item'          => 'Смотреть фильм', // для просмотра записи этого типа.
				'search_items'       => 'Искать фильм', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Фильмы', // название меню
			),
			'public' => true,
			'menu_position' => 15,
			'supports' => array( 'title','editor','thumbnail','excerpt'),
			'taxonomies' => array( 'category' ),
			'menu_icon' => plugins_url( 'img/movie.png', __FILE__ ),
			'has_archive' => true
		)
	);
	/*function register_post_types(){
		register_post_type('movies', array(
			'label'  => null,
			'labels' => array(
				'name'               => 'Фильмы', // основное название для типа записи
				'singular_name'      => 'Фильм', // название для одной записи этого типа
				'add_new'            => 'Добавить фильм', // для добавления новой записи
				'add_new_item'       => 'Добавление фильма', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование фильма', // для редактирования типа записи
				'new_item'           => 'Новый фильм', // текст новой записи
				'view_item'          => 'Смотреть фильм', // для просмотра записи этого типа.
				'search_items'       => 'Искать фильм', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Фильмы', // название меню
			),
			'description'         => '',
			'public'              => false,
			'publicly_queryable'  => null,
			'exclude_from_search' => null,
			'show_ui'             => null,
			'show_in_menu'        => null, // показывать ли в меню адмнки
			'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
			'show_in_nav_menus'   => null,
			'show_in_rest'        => null, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => null,
			'menu_icon'           => null,
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => array('title','editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => array(),
			'has_archive'         => false,
			'rewrite'             => true,
			'query_var'           => true,
		) );
	}*/

}