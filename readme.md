# Laravel Object Factory for Plain Old PHP Objects

Would you like to build plain PHP objects using Laravel 5 model factories?

```BuiltByFactory``` trait makes it a breeze...

## Step 1: Install this package

```composer require stephanecoinon/object-factory```

## Step 2: define your plain model using the trait:

```php
<?php

// /app/Popo.php

namespace App;

use StephaneCoinon\ObjectFactory\BuiltByFactory;

/**
 * This is a plain old PHP class, we do not extend Eloquent.
 */
class Popo
{
    use BuiltByFactory;

    /**
     * Objects built by model factory are constructed from an array of
     * attributes.
     *
     * Here's an example of implementation.
     *
     * @param  array  $attributes
     * @return static
     */
    public function __construct($attributes = [])
    {
        foreach ($attributes as $key => $value) {
            $this->$key = $value;
        }
    }
}
```

## Step 3: define the factory:

```php
<?php

// /database/factories/PopoFactory.php

use Faker\Generator as Faker;

$factory->define(App\Popo::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
```

## Step 4: build your objects!

```php
// A single instance
$object = factory(App\Popo::class)->make();

// Or a collection
$objects = factory(App\Popo::class, 3)->make();
```

