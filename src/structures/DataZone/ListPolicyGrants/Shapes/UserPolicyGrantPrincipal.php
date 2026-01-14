<?php

namespace Sunaoka\Aws\Structures\DataZone\ListPolicyGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userIdentifier
 * @property AllUsersGrantFilter|null $allUsersGrantFilter
 */
class UserPolicyGrantPrincipal extends Shape
{
    /**
     * @param array{
     *     userIdentifier?: string|null,
     *     allUsersGrantFilter?: AllUsersGrantFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
