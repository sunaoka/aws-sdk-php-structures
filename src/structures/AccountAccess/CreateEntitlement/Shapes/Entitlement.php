<?php

namespace Sunaoka\Aws\Structures\AccountAccess\CreateEntitlement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PrincipalRoleEntitlement|null $principalRole
 */
class Entitlement extends Shape
{
    /**
     * @param array{principalRole?: PrincipalRoleEntitlement|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
