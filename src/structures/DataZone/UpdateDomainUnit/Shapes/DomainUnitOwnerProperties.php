<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDomainUnit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainUnitUserProperties|null $user
 * @property DomainUnitGroupProperties|null $group
 */
class DomainUnitOwnerProperties extends Shape
{
    /**
     * @param array{
     *     user?: DomainUnitUserProperties|null,
     *     group?: DomainUnitGroupProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
