<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDomainUnitsForParent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $id
 */
class DomainUnitSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
