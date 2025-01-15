<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Desired
 * @property int|null $Running
 * @property int|null $InUse
 * @property int|null $Available
 * @property int|null $DesiredUserSessions
 * @property int|null $AvailableUserSessions
 * @property int|null $ActiveUserSessions
 * @property int|null $ActualUserSessions
 */
class ComputeCapacityStatus extends Shape
{
    /**
     * @param array{
     *     Desired: int,
     *     Running?: int|null,
     *     InUse?: int|null,
     *     Available?: int|null,
     *     DesiredUserSessions?: int|null,
     *     AvailableUserSessions?: int|null,
     *     ActiveUserSessions?: int|null,
     *     ActualUserSessions?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
