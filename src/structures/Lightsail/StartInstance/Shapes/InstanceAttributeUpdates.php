<?php

namespace Sunaoka\Aws\Structures\Lightsail\StartInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bundleId
 */
class InstanceAttributeUpdates extends Shape
{
    /**
     * @param array{bundleId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
