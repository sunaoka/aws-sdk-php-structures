<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstancesModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReservedInstancesId
 * @property ReservedInstancesConfiguration $TargetConfiguration
 */
class ReservedInstancesModificationResult extends Shape
{
    /**
     * @param array{
     *     ReservedInstancesId?: string,
     *     TargetConfiguration?: ReservedInstancesConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
