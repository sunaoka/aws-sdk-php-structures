<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListUsersIndexCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userArn
 * @property string|null $userName
 * @property string|null $email
 * @property string|null $role
 * @property int|null $totalCapacityBytes
 * @property int|null $totalKBCapacityBytes
 * @property int|null $totalSpaceCapacityBytes
 * @property int|null $kbCount
 * @property int|null $spaceCount
 */
class UserIndexCapacity extends Shape
{
    /**
     * @param array{
     *     userArn?: string|null,
     *     userName?: string|null,
     *     email?: string|null,
     *     role?: string|null,
     *     totalCapacityBytes?: int|null,
     *     totalKBCapacityBytes?: int|null,
     *     totalSpaceCapacityBytes?: int|null,
     *     kbCount?: int|null,
     *     spaceCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
