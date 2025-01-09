<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $path
 * @property 'dont-cache'|'cache' $behavior
 */
class CacheBehaviorPerPath extends Shape
{
    /**
     * @param array{
     *     path?: string,
     *     behavior?: 'dont-cache'|'cache'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
