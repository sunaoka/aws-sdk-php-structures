<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListUsers\Shapes;

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
 * @property int $createTime
 * @property int $lastEnabledTime
 * @property int $lastDisabledTime
 * @property int $lastModifiedTime
 * @property int $lastLoginTime
 */
class User extends Shape
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
     *     createTime?: int,
     *     lastEnabledTime?: int,
     *     lastDisabledTime?: int,
     *     lastModifiedTime?: int,
     *     lastLoginTime?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
