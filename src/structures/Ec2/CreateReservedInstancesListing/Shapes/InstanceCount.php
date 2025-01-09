<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateReservedInstancesListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $InstanceCount
 * @property 'available'|'sold'|'cancelled'|'pending' $State
 */
class InstanceCount extends Shape
{
    /**
     * @param array{
     *     InstanceCount?: int,
     *     State?: 'available'|'sold'|'cancelled'|'pending'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
