<?php
return [
    'title'   => 'Users',
    'single'  => 'user',
    'model'   => 'App\User',
    'columns' => [
        'id',
        'email',
        'name'
    ],
    'edit_fields' => [
        'email' => [
            'type' => 'text',
        ],
        'name' => [
            'type' => 'text',
        ]
    ],
];