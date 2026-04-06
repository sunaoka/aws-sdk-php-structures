<?php

namespace Sunaoka\Aws\Structures\DataZone\ListPolicyGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainUnitFilterForProject|null $domainUnitFilter
 */
class ProjectGrantFilter extends Shape
{
    /**
     * @param array{domainUnitFilter?: DomainUnitFilterForProject|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
