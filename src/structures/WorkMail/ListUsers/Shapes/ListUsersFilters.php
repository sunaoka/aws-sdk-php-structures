<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UsernamePrefix
 * @property string|null $DisplayNamePrefix
 * @property string|null $PrimaryEmailPrefix
 * @property 'ENABLED'|'DISABLED'|'DELETED'|null $State
 * @property string|null $IdentityProviderUserIdPrefix
 */
class ListUsersFilters extends Shape
{
    /**
     * @param array{
     *     UsernamePrefix?: string|null,
     *     DisplayNamePrefix?: string|null,
     *     PrimaryEmailPrefix?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|'DELETED'|null,
     *     IdentityProviderUserIdPrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
