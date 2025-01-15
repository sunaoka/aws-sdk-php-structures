<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListUsersByPermissionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userId
 * @property 'CREATING'|'ENABLED'|'DISABLED'|null $status
 * @property string|null $firstName
 * @property string|null $lastName
 * @property string|null $emailAddress
 * @property 'SUPER_USER'|'APP_USER'|null $type
 * @property 'ENABLED'|'DISABLED'|null $apiAccess
 * @property string|null $apiAccessPrincipalArn
 * @property 'ADDITION_IN_PROGRESS'|'ADDITION_SUCCESS'|'REMOVAL_IN_PROGRESS'|null $membershipStatus
 */
class UserByPermissionGroup extends Shape
{
    /**
     * @param array{
     *     userId?: string|null,
     *     status?: 'CREATING'|'ENABLED'|'DISABLED'|null,
     *     firstName?: string|null,
     *     lastName?: string|null,
     *     emailAddress?: string|null,
     *     type?: 'SUPER_USER'|'APP_USER'|null,
     *     apiAccess?: 'ENABLED'|'DISABLED'|null,
     *     apiAccessPrincipalArn?: string|null,
     *     membershipStatus?: 'ADDITION_IN_PROGRESS'|'ADDITION_SUCCESS'|'REMOVAL_IN_PROGRESS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
