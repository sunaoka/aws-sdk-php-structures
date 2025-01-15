<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'dont-cache'|'cache'|null $behavior
 */
class CacheBehavior extends Shape
{
    /**
     * @param array{behavior?: 'dont-cache'|'cache'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
