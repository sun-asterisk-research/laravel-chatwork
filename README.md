# Laravel Chatwork SDK

[![Latest Stable Version](https://poser.pugx.org/sun-asterisk/laravel-chatwork/v/stable)](https://packagist.org/packages/sun-asterisk/laravel-chatwork)

Chatwork SDK for Laravel 5, 6, 7.

## Installation

Using composer:

```sh
composer require sun-asterisk/laravel-chatwork
```

For Laravel 5.4 and earlier, add the service provider to your `config/app.php`.

```php
'providers' => [
    // ...
    SunAsterisk\Chatwork\Laravel\ServiceProvider::class
    // ...
];
```

## Configure

First register an API Key [here](https://www.chatwork.com/service/packages/chatwork/subpackages/api/token.php).
Then add the API key to your `.env`:

```env
CHATWORK_API_KEY=your_api_key_here
```

## Usage

You can use the provided facade via an alias:

```php
use Chatwork;

$me = Chatwork::me();
$members = Chatwork::room($roomId)->members()->list();
```

Or use dependency injection:

```php
use SunAsterisk\Chatwork\Chatwork;

class ChatworkCommand extends Command
{
    public function handle(Chatwork $chatwork)
    {
        $message = $chatwork->toAll()->text('Hi there');
        $chatwork->room($roomId)->messages()->create($message);
    }
}
```
