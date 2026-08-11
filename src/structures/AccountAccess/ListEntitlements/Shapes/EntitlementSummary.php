<?php

namespace Sunaoka\Aws\Structures\AccountAccess\ListEntitlements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PrincipalRoleEntitlementSummary|null $principalRole
 */
class EntitlementSummary extends Shape
{
    /**
     * @param array{principalRole?: PrincipalRoleEntitlementSummary|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
