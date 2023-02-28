# Warning about the use of cookies
It consists of a modal window with text, and a confirmation button.  
Clicking on the button means that the client consents to the use of cookies.  
The confirmed consent is stored in a session cookie.  

## Requirements
- PHP 8.3 or higher
- Laravel 11.0 or higher
- Composer

## Installation
Add to the file composer.json  

    "require": {
        "mldanshin/package-cookie-notice": "^1.0.0"
    }

    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/mldanshin/package-cookie-notice"
        }
    ]

Execute

    composer update

## Usage
### Step 1 **Required!**
Include the view in your views file:

    @include('danshin/cookie-notice::alert')

### Step 2 **Required!**
Import the CookieNotice javascript class into your script file and create a CookieNotice object:

    import CookieNotice from "../../vendor/mldanshin/package-cookie-notice/resources/js/CookieNotice.js";
    new CookieNotice();

### Step 3 **Optional**
Import ready-made Css styles into your css file:

    @import '../../vendor/mldanshin/package-cookie-notice/resources/css/cookie-notice'

### Step 4 **Required!**
Execute

    npm run dev
или

    npm run production

## License

Open source software licensed in accordance with [MIT license](https://opensource.org/licenses/MIT).
 