<?php

return [
  'title' => 'Works',
  'single' => 'work',
  'model' => 'App\Models\Work',
  'columns' => [
    'id',
    'title',
    'price',
    'metrs',
    'floor',
    'room',
    'active'
   ],
   'edit_fields' => [
      'title' => [
        'type' => 'text',
      ],
      'price' => [
        'type' => 'text',
      ],
      'metrs' => [
        'type' => 'text',
      ],
      'floor' => [
        'type' => 'text',
      ],
      'room' => [
        'type' => 'text',
      ],
      'active' => [
        'type' => 'bool',
      ],
   ],
   'filters' => [
     'title' => [
        'type' => 'text',
      ],
      'price' => [
        'type' => 'text',
      ],
      'active' => [
        'type' => 'bool',
      ],
   ]
];