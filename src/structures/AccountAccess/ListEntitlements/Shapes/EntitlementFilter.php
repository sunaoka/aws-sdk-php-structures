<?php

namespace Sunaoka\Aws\Structures\AccountAccess\ListEntitlements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PrincipalRoleEntitlementFilter|null $principalRole
 */
class EntitlementFilter extends Shape
{
    /**
     * @param array{principalRole?: PrincipalRoleEntitlementFilter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
