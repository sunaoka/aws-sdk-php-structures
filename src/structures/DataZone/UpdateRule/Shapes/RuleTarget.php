<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainUnitTarget $domainUnitTarget
 */
class RuleTarget extends Shape
{
    /**
     * @param array{domainUnitTarget?: DomainUnitTarget} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
