<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $path
 * @property 'dont-cache'|'cache'|null $behavior
 */
class CacheBehaviorPerPath extends Shape
{
    /**
     * @param array{
     *     path?: string|null,
     *     behavior?: 'dont-cache'|'cache'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
