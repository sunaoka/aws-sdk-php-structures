<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Email
 * @property string|null $Name
 * @property string|null $DisplayName
 * @property 'ENABLED'|'DISABLED'|'DELETED'|null $State
 * @property 'USER'|'RESOURCE'|'SYSTEM_USER'|'REMOTE_USER'|null $UserRole
 * @property \Aws\Api\DateTimeResult|null $EnabledDate
 * @property \Aws\Api\DateTimeResult|null $DisabledDate
 * @property string|null $IdentityProviderUserId
 * @property string|null $IdentityProviderIdentityStoreId
 */
class User extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Email?: string|null,
     *     Name?: string|null,
     *     DisplayName?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|'DELETED'|null,
     *     UserRole?: 'USER'|'RESOURCE'|'SYSTEM_USER'|'REMOTE_USER'|null,
     *     EnabledDate?: \Aws\Api\DateTimeResult|null,
     *     DisabledDate?: \Aws\Api\DateTimeResult|null,
     *     IdentityProviderUserId?: string|null,
     *     IdentityProviderIdentityStoreId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
