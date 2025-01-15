<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstancesModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReservedInstancesId
 */
class ReservedInstancesId extends Shape
{
    /**
     * @param array{ReservedInstancesId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
