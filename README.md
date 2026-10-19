# Процессор строк

Краткое описание пакета

## Требования

- PHP 8.0

## Установка

composer require dmitriy-zhukov/otus-composer-package

# Использование

```php
<?php
$processor = new StringProcessor();
echo $processor->getLength('my string');   // 9
```
