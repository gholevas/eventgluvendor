<?php
/**
* Language file for group error/success messages
*
*/

return array(

    'group_exists'        => 'Group already exists!',
    'group_not_found'     => 'Group [:id] does not exist.',
    'group_name_required' => 'The name field is required',

    'success' => array(
        'create' => 'Group was successfully created.',
        'update' => 'Group was successfully updated.',
        'delete' => 'Group was successfully deleted.',
    ),

    'delete' => array(
        'create' => 'There was an issue creating the group. Please try again.',
        'update' => 'There was an issue updating the group. Please try again.',
        'delete' => 'There was an issue deleting the group. Please try again.',
    ),

    'error' => array(
        'group_exists' => 'A group already exists with that name, names must be unique for groups.',
    ),

);
