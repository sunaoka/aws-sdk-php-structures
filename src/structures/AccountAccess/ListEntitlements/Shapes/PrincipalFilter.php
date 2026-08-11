<?php

namespace Sunaoka\Aws\Structures\AccountAccess\ListEntitlements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IdentityCenterPrincipalFilter|null $identityCenter
 */
class PrincipalFilter extends Shape
{
    /**
     * @param array{identityCenter?: IdentityCenterPrincipalFilter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
