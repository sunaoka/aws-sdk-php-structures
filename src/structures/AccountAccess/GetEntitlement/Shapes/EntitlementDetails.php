<?php

namespace Sunaoka\Aws\Structures\AccountAccess\GetEntitlement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PrincipalRoleEntitlementDetails|null $principalRole
 */
class EntitlementDetails extends Shape
{
    /**
     * @param array{principalRole?: PrincipalRoleEntitlementDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
