<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Email
 * @property string $Name
 * @property string $DisplayName
 * @property 'ENABLED'|'DISABLED'|'DELETED' $State
 * @property 'USER'|'RESOURCE'|'SYSTEM_USER'|'REMOTE_USER' $UserRole
 * @property \Aws\Api\DateTimeResult $EnabledDate
 * @property \Aws\Api\DateTimeResult $DisabledDate
 * @property string $IdentityProviderUserId
 * @property string $IdentityProviderIdentityStoreId
 */
class User extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Email?: string,
     *     Name?: string,
     *     DisplayName?: string,
     *     State?: 'ENABLED'|'DISABLED'|'DELETED',
     *     UserRole?: 'USER'|'RESOURCE'|'SYSTEM_USER'|'REMOTE_USER',
     *     EnabledDate?: \Aws\Api\DateTimeResult,
     *     DisabledDate?: \Aws\Api\DateTimeResult,
     *     IdentityProviderUserId?: string,
     *     IdentityProviderIdentityStoreId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
