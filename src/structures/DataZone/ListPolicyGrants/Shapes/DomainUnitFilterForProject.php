<?php

namespace Sunaoka\Aws\Structures\DataZone\ListPolicyGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainUnit
 * @property bool $includeChildDomainUnits
 */
class DomainUnitFilterForProject extends Shape
{
    /**
     * @param array{
     *     domainUnit: string,
     *     includeChildDomainUnits?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
