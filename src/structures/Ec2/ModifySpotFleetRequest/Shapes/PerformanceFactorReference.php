<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySpotFleetRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceFamily
 */
class PerformanceFactorReference extends Shape
{
    /**
     * @param array{InstanceFamily?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
