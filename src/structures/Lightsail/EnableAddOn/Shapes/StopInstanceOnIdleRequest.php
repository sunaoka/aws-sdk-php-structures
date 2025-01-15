<?php

namespace Sunaoka\Aws\Structures\Lightsail\EnableAddOn\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $threshold
 * @property string|null $duration
 */
class StopInstanceOnIdleRequest extends Shape
{
    /**
     * @param array{
     *     threshold?: string|null,
     *     duration?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
