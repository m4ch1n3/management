<?php $navbar = new Illuminate\Support\Fluent([
    'id'    => 'management',
    'title' => 'Managemnt',
    'url'   => handles('blupl::management/member'),
    'menu'  => view('blupl/management::widgets._menu'),
]); ?>

@decorator('navbar', $navbar)
