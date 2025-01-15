<?php

namespace Sunaoka\Aws\Structures\DataZone\AddPolicyGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainUnit
 * @property bool|null $includeChildDomainUnits
 */
class DomainUnitFilterForProject extends Shape
{
    /**
     * @param array{
     *     domainUnit: string,
     *     includeChildDomainUnits?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
