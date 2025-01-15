<?php

namespace Sunaoka\Aws\Structures\Ec2\GetGroupsForCapacityReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupArn
 * @property string|null $OwnerId
 */
class CapacityReservationGroup extends Shape
{
    /**
     * @param array{
     *     GroupArn?: string|null,
     *     OwnerId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
