<?php

namespace Sunaoka\Aws\Structures\AccountAccess\CreateEntitlement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IdentityCenterPrincipal|null $identityCenter
 */
class Principal extends Shape
{
    /**
     * @param array{identityCenter?: IdentityCenterPrincipal|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
