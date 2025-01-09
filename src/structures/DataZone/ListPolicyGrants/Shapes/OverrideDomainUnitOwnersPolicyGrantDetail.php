<?php

namespace Sunaoka\Aws\Structures\DataZone\ListPolicyGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $includeChildDomainUnits
 */
class OverrideDomainUnitOwnersPolicyGrantDetail extends Shape
{
    /**
     * @param array{includeChildDomainUnits?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
