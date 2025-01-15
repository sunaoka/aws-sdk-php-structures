<?php

namespace Sunaoka\Aws\Structures\DataZone\AddPolicyGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AllUsersGrantFilter|null $allUsersGrantFilter
 * @property string|null $userIdentifier
 */
class UserPolicyGrantPrincipal extends Shape
{
    /**
     * @param array{
     *     allUsersGrantFilter?: AllUsersGrantFilter|null,
     *     userIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
