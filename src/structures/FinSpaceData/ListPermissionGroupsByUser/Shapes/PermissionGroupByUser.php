<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListPermissionGroupsByUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $permissionGroupId
 * @property string $name
 * @property 'ADDITION_IN_PROGRESS'|'ADDITION_SUCCESS'|'REMOVAL_IN_PROGRESS' $membershipStatus
 */
class PermissionGroupByUser extends Shape
{
    /**
     * @param array{
     *     permissionGroupId?: string,
     *     name?: string,
     *     membershipStatus?: 'ADDITION_IN_PROGRESS'|'ADDITION_SUCCESS'|'REMOVAL_IN_PROGRESS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
