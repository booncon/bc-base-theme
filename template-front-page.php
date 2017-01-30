<?php
/**
 * Template Name: Front Page Template
 */

$context = Timber::get_context();
$post = Timber::query_post();
$context['post'] = $post;
$context['pagination'] = $context['post'];

// $case_studies_args = array(
//   'post_type' => 'px_case_study',
//   'posts_per_page' => 4
// );
//
// $blogs_args = array(
//   'post_type' => 'post',
//   'posts_per_page' => 2
// );
//
// $context['case_studies'] = Timber::get_posts($case_studies_args);
// $context['blogs'] = Timber::get_posts($blogs_args);


Timber::render('views/TemplateFrontPage/TemplateFrontPage.twig', $context);
?>
