# FormError
A Laravel package to easily display errors from validator.

# Installation

Execute composer command.

    composer require form-error:2.*

Set the service provider in app.php

    'providers' => [
        ...Others...,  
        Sukohi\FormError\FormErrorServiceProvider::class,
    ]

# Preparation

    php artisan vendor:publish

Now you have a view called `form_error` in resources/views/vendor/sukohi/for-error.  
So you can customize this view as you want.

# Usage
    
    {!! Form::open() !!}
    
        {!! Form::text('email') !!}
        {!! form_error('email') !!} <-- Here. The argument is name of input data.
        {!! Form::submit('Submit') !!}
        
    {!! Form::close() !!}

# License

This package is licensed under the MIT License.
Copyright 2016 Sukohi Kuhoh