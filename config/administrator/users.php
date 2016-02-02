<?php

return [
  'title' => 'Users',
  'single' => 'user',
  'model' => 'App\Models\User',
  'columns' => [
    'id',
    'email'
   ],
   'edit_fields' => [
      'email' => [
        'type' => 'text',
      ] 
   ],
];