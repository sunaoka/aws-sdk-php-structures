<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReservationId
 * @property string|null $OwnerId
 * @property string|null $RequesterId
 * @property list<GroupIdentifier>|null $Groups
 * @property list<Instance>|null $Instances
 */
class Reservation extends Shape
{
    /**
     * @param array{
     *     ReservationId?: string|null,
     *     OwnerId?: string|null,
     *     RequesterId?: string|null,
     *     Groups?: list<GroupIdentifier>|null,
     *     Instances?: list<Instance>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
