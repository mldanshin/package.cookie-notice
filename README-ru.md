# Предупреждение об использовании куки
Состоит из модального окна с текстом, и кнопкой подтверждения.  
Нажатие на кнопку означает, что клиент даёт согласие на использование куки.  
Подтвержденное согласие хранится в сессионной куки.

## Требования
- PHP 8.3 или выше  
- Laravel 11.0  или выше
- Composer

## Установка
Добавьте в файл composer.json  

    "require": {
        "mldanshin/package-cookie-notice": "^1.0.0"
    }

    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/mldanshin/package-cookie-notice"
        }
    ]

Выполните

    composer update

## Использование
### Шаг 1 **Требуется!**
Включите представление в Ваш файл-представления:

    @include('danshin/cookie-notice::alert')

### Шаг 2 **Требуется!**
Импортируйте javascript класс CookieNotice в Ваш файл скрипта и создайте объект CookieNotice:

    import CookieNotice from "../../vendor/mldanshin/package-cookie-notice/resources/js/CookieNotice.js";
    new CookieNotice();

### Шаг 3 **По желанию**
Импортируйте уже готовые стили Css в Ваш css файл:

    @import '../../vendor/mldanshin/package-cookie-notice/resources/css/cookie-notice'

### Шаг 4 **Требуется!**
Выполните

    npm run dev
или

    npm run production

## Лицензия

Программное обеспечение с открытым исходным кодом, лицензированное в соответствии с [MIT license](https://opensource.org/licenses/MIT).
 