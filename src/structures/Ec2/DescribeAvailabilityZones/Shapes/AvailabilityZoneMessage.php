<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAvailabilityZones\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 */
class AvailabilityZoneMessage extends Shape
{
    /**
     * @param array{Message?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
