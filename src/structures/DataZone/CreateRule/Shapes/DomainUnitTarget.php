<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainUnitId
 * @property bool|null $includeChildDomainUnits
 */
class DomainUnitTarget extends Shape
{
    /**
     * @param array{
     *     domainUnitId: string,
     *     includeChildDomainUnits?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
