# actionclient-php

Simple PHP Client for sending POST Requests to an ActionHero.js API.

```php

// spin up an instance
$ac = new ActionClient('http://localhost:8080/api');

// call an action
$response = $ac->call('myAction', array('key' => 'val'));

```

## License
Copyright (c) 2014 Simon Kusterer
Licensed under the MIT license.