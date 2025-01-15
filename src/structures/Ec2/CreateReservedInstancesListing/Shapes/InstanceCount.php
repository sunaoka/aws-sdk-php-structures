<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateReservedInstancesListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $InstanceCount
 * @property 'available'|'sold'|'cancelled'|'pending'|null $State
 */
class InstanceCount extends Shape
{
    /**
     * @param array{
     *     InstanceCount?: int|null,
     *     State?: 'available'|'sold'|'cancelled'|'pending'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
