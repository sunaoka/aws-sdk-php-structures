<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'dont-cache'|'cache' $behavior
 */
class CacheBehavior extends Shape
{
    /**
     * @param array{behavior?: 'dont-cache'|'cache'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
