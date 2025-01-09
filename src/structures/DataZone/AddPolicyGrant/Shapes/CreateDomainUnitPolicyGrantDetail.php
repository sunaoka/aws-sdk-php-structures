<?php

namespace Sunaoka\Aws\Structures\DataZone\AddPolicyGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $includeChildDomainUnits
 */
class CreateDomainUnitPolicyGrantDetail extends Shape
{
    /**
     * @param array{includeChildDomainUnits?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
