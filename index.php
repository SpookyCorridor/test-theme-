<?php
 
 /* 
 return an object with a lot of the common things we need across the site. 
 Things like your nav, wp_head and wp_footer you'll want to start with each time
 */ 
 
$context = Timber::get_context(); 

/*
query for posts to loop over in index view
*/ 

$context['posts'] = Timber::get_posts(); 
$context['page'] = 'index'; 

/* 
render the index view template and give it the data to use with twig
*/ 

Timber::render('index.twig', $context); 

