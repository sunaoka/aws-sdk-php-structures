<?php

namespace Sunaoka\Aws\Structures\DataZone\ListPolicyGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AllDomainUnitsGrantFilter $allDomainUnitsGrantFilter
 */
class DomainUnitGrantFilter extends Shape
{
    /**
     * @param array{allDomainUnitsGrantFilter?: AllDomainUnitsGrantFilter} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
