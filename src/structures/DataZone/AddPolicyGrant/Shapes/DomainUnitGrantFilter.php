<?php

namespace Sunaoka\Aws\Structures\DataZone\AddPolicyGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AllDomainUnitsGrantFilter|null $allDomainUnitsGrantFilter
 */
class DomainUnitGrantFilter extends Shape
{
    /**
     * @param array{allDomainUnitsGrantFilter?: AllDomainUnitsGrantFilter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
