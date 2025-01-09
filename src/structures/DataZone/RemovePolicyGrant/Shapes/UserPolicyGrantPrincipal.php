<?php

namespace Sunaoka\Aws\Structures\DataZone\RemovePolicyGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AllUsersGrantFilter $allUsersGrantFilter
 * @property string $userIdentifier
 */
class UserPolicyGrantPrincipal extends Shape
{
    /**
     * @param array{
     *     allUsersGrantFilter?: AllUsersGrantFilter,
     *     userIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
