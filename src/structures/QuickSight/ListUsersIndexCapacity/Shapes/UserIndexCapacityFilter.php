<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListUsersIndexCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserNameOrEmailFilter|null $userNameOrEmail
 * @property CapacityBytesRangeFilter|null $totalCapacityBytes
 */
class UserIndexCapacityFilter extends Shape
{
    /**
     * @param array{
     *     userNameOrEmail?: UserNameOrEmailFilter|null,
     *     totalCapacityBytes?: CapacityBytesRangeFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
