<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDomainUnit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DomainUnitGroupProperties|null $group
 * @property DomainUnitUserProperties|null $user
 */
class DomainUnitOwnerProperties extends Shape
{
    /**
     * @param array{
     *     group?: DomainUnitGroupProperties|null,
     *     user?: DomainUnitUserProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
