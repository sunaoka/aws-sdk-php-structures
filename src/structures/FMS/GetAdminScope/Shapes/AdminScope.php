<?php

namespace Sunaoka\Aws\Structures\FMS\GetAdminScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccountScope $AccountScope
 * @property OrganizationalUnitScope $OrganizationalUnitScope
 * @property RegionScope $RegionScope
 * @property PolicyTypeScope $PolicyTypeScope
 */
class AdminScope extends Shape
{
    /**
     * @param array{
     *     AccountScope?: AccountScope,
     *     OrganizationalUnitScope?: OrganizationalUnitScope,
     *     RegionScope?: RegionScope,
     *     PolicyTypeScope?: PolicyTypeScope
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
