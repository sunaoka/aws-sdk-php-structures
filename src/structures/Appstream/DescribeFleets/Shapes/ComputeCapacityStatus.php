<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Desired
 * @property int $Running
 * @property int $InUse
 * @property int $Available
 * @property int $DesiredUserSessions
 * @property int $AvailableUserSessions
 * @property int $ActiveUserSessions
 * @property int $ActualUserSessions
 */
class ComputeCapacityStatus extends Shape
{
    /**
     * @param array{
     *     Desired: int,
     *     Running?: int,
     *     InUse?: int,
     *     Available?: int,
     *     DesiredUserSessions?: int,
     *     AvailableUserSessions?: int,
     *     ActiveUserSessions?: int,
     *     ActualUserSessions?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
