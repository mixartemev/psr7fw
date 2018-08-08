<?php

namespace Framework\Http;

require '../vendor/autoload.php';

### Initialization

$request = RequestFactory::fromGlobals();

### Action

$name = $request->getQueryParams()['name'] ?? 'Guest';
header('X-Developer: Artemiev');
echo "Hi, $name!";
