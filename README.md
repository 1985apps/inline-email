# Inline Email

A Simple PHP library to generate HTML files with inline css while still using the classes while writing the markup. Primarily focused on being able to create simple HTML email content

## Installation
### Composer

    $ composer require 1985apps/inline-email:dev-master

    $ "requries" : {
        "1985apps/inline-email": "dev-master"
    }

# Usage
### Composer

	require_once "vendor/autoload.php";
	$i = new InlineEmail\InlineEmail("style.php");

### Without Composer

	require_once "path/to/src/InlineEmail/InlineEmail.php";
	$i = new InlineEmail\InlineEmail("style.php");

### mail.php
    require_once "<in any manner>";
    
    <div <?= $i->style(["email-container"] ?>>
        <div <?= $i->style(["bold"]) ?>>I am a bold line</div>
    </div>

Generates:

    <div style="max-width: 600px">
        <div style="font-weight: bold">I am a bold line</div>        
    </div>