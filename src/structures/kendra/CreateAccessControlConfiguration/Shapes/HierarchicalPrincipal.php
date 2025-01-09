<?php

namespace Sunaoka\Aws\Structures\kendra\CreateAccessControlConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Principal> $PrincipalList
 */
class HierarchicalPrincipal extends Shape
{
    /**
     * @param array{PrincipalList: list<Principal>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
