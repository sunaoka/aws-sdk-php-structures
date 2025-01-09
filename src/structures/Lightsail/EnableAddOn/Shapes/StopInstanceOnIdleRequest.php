<?php

namespace Sunaoka\Aws\Structures\Lightsail\EnableAddOn\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $threshold
 * @property string $duration
 */
class StopInstanceOnIdleRequest extends Shape
{
    /**
     * @param array{
     *     threshold?: string,
     *     duration?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
