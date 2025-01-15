<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstancesModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReservedInstancesId
 * @property ReservedInstancesConfiguration|null $TargetConfiguration
 */
class ReservedInstancesModificationResult extends Shape
{
    /**
     * @param array{
     *     ReservedInstancesId?: string|null,
     *     TargetConfiguration?: ReservedInstancesConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
