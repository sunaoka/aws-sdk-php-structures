<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReservationId
 * @property string $OwnerId
 * @property string $RequesterId
 * @property list<GroupIdentifier> $Groups
 * @property list<Instance> $Instances
 */
class Reservation extends Shape
{
    /**
     * @param array{
     *     ReservationId?: string,
     *     OwnerId?: string,
     *     RequesterId?: string,
     *     Groups?: list<GroupIdentifier>,
     *     Instances?: list<Instance>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
