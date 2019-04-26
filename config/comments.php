<?php

return [
    // The model which creates the comments aka the User model
    'commenter' => \App\Models\User::class,

    'permissions' => [
        'create-comment' => 'Kubill\Comments\CommentPolicy@create',
        'delete-comment' => 'Kubill\Comments\CommentPolicy@delete',
        'edit-comment' => 'Kubill\Comments\CommentPolicy@update',
        'reply-to-comment' => 'Kubill\Comments\CommentPolicy@reply',
    ]
];
