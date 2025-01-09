<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UsernamePrefix
 * @property string $DisplayNamePrefix
 * @property string $PrimaryEmailPrefix
 * @property 'ENABLED'|'DISABLED'|'DELETED' $State
 * @property string $IdentityProviderUserIdPrefix
 */
class ListUsersFilters extends Shape
{
    /**
     * @param array{
     *     UsernamePrefix?: string,
     *     DisplayNamePrefix?: string,
     *     PrimaryEmailPrefix?: string,
     *     State?: 'ENABLED'|'DISABLED'|'DELETED',
     *     IdentityProviderUserIdPrefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
