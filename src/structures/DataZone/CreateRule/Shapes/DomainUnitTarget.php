<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainUnitId
 * @property bool $includeChildDomainUnits
 */
class DomainUnitTarget extends Shape
{
    /**
     * @param array{
     *     domainUnitId: string,
     *     includeChildDomainUnits?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
