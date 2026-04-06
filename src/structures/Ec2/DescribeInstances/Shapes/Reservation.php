<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GroupIdentifier>|null $Groups
 * @property list<Instance>|null $Instances
 * @property string|null $OwnerId
 * @property string|null $RequesterId
 * @property string|null $ReservationId
 */
class Reservation extends Shape
{
    /**
     * @param array{
     *     Groups?: list<GroupIdentifier>|null,
     *     Instances?: list<Instance>|null,
     *     OwnerId?: string|null,
     *     RequesterId?: string|null,
     *     ReservationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
