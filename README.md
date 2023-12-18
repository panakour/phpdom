[![ci](https://github.com/panakour/phpdom/actions/workflows/ci.yml/badge.svg)](https://github.com/panakour/phpdom/actions/workflows/ci.yml)
![Code Coverage Badge](https://raw.githubusercontent.com/panakour/phpdom/image-data/coverage.svg)

# Panakour DOM

This is a PHP package that provides a simple and intuitive API for manipulating DOM elements.

## Installation

You can install the package via composer:

```bash
composer require panakour/phpdom
```

## Usage

First, you need to create a new instance of the `Dom` class:

```php
$dom = new Dom('<html><body><p>Hello, World!</p></body></html>');
```

### Getting a list of nodes
You can get a list of nodes with a specific tag name using the getNodeList method:
```php
$images = $dom->getNodeList('img');
```
This will return a DOMNodeList containing all img elements in the document.

### Getting attribute values
You can get the values of a specific attribute for all nodes with a specific tag name using the getAttributesValue method:
```php
$imgSrc = $dom->getAttributesValue('img', 'src');
```

### Replacing attributes
You can replace the attributes of all nodes with a specific tag name using the replaceAttributes method:
```php
$dom->replaceAttributes('img', [
    ['src' => 'new-src.jpg', 'alt' => 'New image']
]);
```

This will replace the src and alt attributes of all img elements in the document.

### Removing elements
You can remove all nodes with a specific tag name using the removeElementsAndItsContent method:
```php
$dom->removeElementsAndItsContent(['img']);
```

This will remove all img elements from the document.

### Explore More
Explore additional features and use cases in the unit tests found in /tests/DomTest.php.