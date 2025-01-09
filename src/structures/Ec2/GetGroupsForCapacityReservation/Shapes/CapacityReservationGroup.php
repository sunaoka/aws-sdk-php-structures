<?php

namespace Sunaoka\Aws\Structures\Ec2\GetGroupsForCapacityReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupArn
 * @property string $OwnerId
 */
class CapacityReservationGroup extends Shape
{
    /**
     * @param array{
     *     GroupArn?: string,
     *     OwnerId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
