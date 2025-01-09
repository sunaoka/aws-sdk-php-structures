<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListUsersByPermissionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userId
 * @property 'CREATING'|'ENABLED'|'DISABLED' $status
 * @property string $firstName
 * @property string $lastName
 * @property string $emailAddress
 * @property 'SUPER_USER'|'APP_USER' $type
 * @property 'ENABLED'|'DISABLED' $apiAccess
 * @property string $apiAccessPrincipalArn
 * @property 'ADDITION_IN_PROGRESS'|'ADDITION_SUCCESS'|'REMOVAL_IN_PROGRESS' $membershipStatus
 */
class UserByPermissionGroup extends Shape
{
    /**
     * @param array{
     *     userId?: string,
     *     status?: 'CREATING'|'ENABLED'|'DISABLED',
     *     firstName?: string,
     *     lastName?: string,
     *     emailAddress?: string,
     *     type?: 'SUPER_USER'|'APP_USER',
     *     apiAccess?: 'ENABLED'|'DISABLED',
     *     apiAccessPrincipalArn?: string,
     *     membershipStatus?: 'ADDITION_IN_PROGRESS'|'ADDITION_SUCCESS'|'REMOVAL_IN_PROGRESS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
