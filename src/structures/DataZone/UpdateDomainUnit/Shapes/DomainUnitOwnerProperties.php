<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDomainUnit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainUnitGroupProperties $group
 * @property DomainUnitUserProperties $user
 */
class DomainUnitOwnerProperties extends Shape
{
    /**
     * @param array{
     *     group?: DomainUnitGroupProperties,
     *     user?: DomainUnitUserProperties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
