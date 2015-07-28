# Inline Email

A Simple PHP library to generate HTML files with inline css while still using classes while writing the markup. Primarily focused on being able to create simple HTML email content

## Installation
### Composer

    $ composer require 1985apps/inline-email:dev-master

    $ "requries" : {
        "1985apps/inline-email": "dev-master"
    }

# Usage
### Composer

	require_once "vendor/autoload.php";
	$i = new InlineEmail\InlineEmail("<path/to/style.php>");

### Without Composer

	require_once "path/to/src/InlineEmail/InlineEmail.php";
	$i = new InlineEmail\InlineEmail("<path/to/style.php>");

***
### Files and configuration 
There are 2 files that need to be setup
- mail.php - File which contains the HTML
- style.php - File which contains the CSS styling

**mail.php**

*This file should contain the HTML structure that you want generated*

    <?
        require_once "vendor/autoload.php";
        $i = InlineEmail\InlineEmail("./style.php");
    ?>
    <div <?= $i->style(["email-container"] ?>>
        <div <?= $i->style(["bold", "red", "font-size: 12px"]) ?>>I am bold, red and 12</div>
    </div>

**style.php**

*This file should return a associative array of classnames to css specifications*

    <?
    return [
        "bold" => "font-weight: bold",
        "red" => "color: red",
        "box" => "border: 1px solid red"
    ];
    
### Generate HTML
Run the below command to generate a HTML file

    $ php mail.php > mail.html
    
Generates

    <div style="max-width: 600px">
        <div style="font-weight: bold; color: red; font-size: 12px">I am bold, red and 12
    </div>

### defaults.style.php

inline-email is shipped with a few standard default css classes. They are found in src/InlineEmail/defaults.style.php
    
Thats it ! And we love pull requests :) Feel free to improve on our library and we will be happy to merge it into master.