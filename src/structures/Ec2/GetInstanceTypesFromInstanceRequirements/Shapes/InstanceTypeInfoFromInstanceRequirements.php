<?php

namespace Sunaoka\Aws\Structures\Ec2\GetInstanceTypesFromInstanceRequirements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceType
 */
class InstanceTypeInfoFromInstanceRequirements extends Shape
{
    /**
     * @param array{InstanceType?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
