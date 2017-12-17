# hello-yii2

HelloWorld on yii2

## Usage

1. clone

```
$ git clone https://github.com/shimabox/hello-yii2.git
```

2. setup

```
$ cd hello-yii2/
$ composer install
$ chmod 777 runtime
$ chmod 777 web/assets
$ chmod 755 yii
```

modify cookieValidationKey

- config/web.php

```
$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'enter your secret key here',
        ],
```

3. run

```
$ php yii serve
```

4. Hello World!!

http://localhost:8080/site/say/Hello+World!!

## See Also

[Yii2でHelloWorldしてみた | Shimabox Blog](https://blog.shimabox.net/2017/12/12/helloworld_on_yii2/ "Yii2でHelloWorldしてみた | Shimabox Blog")
