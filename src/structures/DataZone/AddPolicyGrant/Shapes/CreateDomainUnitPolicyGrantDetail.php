<?php

namespace Sunaoka\Aws\Structures\DataZone\AddPolicyGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $includeChildDomainUnits
 */
class CreateDomainUnitPolicyGrantDetail extends Shape
{
    /**
     * @param array{includeChildDomainUnits?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
