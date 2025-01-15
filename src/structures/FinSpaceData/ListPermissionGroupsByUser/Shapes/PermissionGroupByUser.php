<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListPermissionGroupsByUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $permissionGroupId
 * @property string|null $name
 * @property 'ADDITION_IN_PROGRESS'|'ADDITION_SUCCESS'|'REMOVAL_IN_PROGRESS'|null $membershipStatus
 */
class PermissionGroupByUser extends Shape
{
    /**
     * @param array{
     *     permissionGroupId?: string|null,
     *     name?: string|null,
     *     membershipStatus?: 'ADDITION_IN_PROGRESS'|'ADDITION_SUCCESS'|'REMOVAL_IN_PROGRESS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
