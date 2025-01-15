<?php

namespace Sunaoka\Aws\Structures\FMS\PutAdminAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccountScope|null $AccountScope
 * @property OrganizationalUnitScope|null $OrganizationalUnitScope
 * @property RegionScope|null $RegionScope
 * @property PolicyTypeScope|null $PolicyTypeScope
 */
class AdminScope extends Shape
{
    /**
     * @param array{
     *     AccountScope?: AccountScope|null,
     *     OrganizationalUnitScope?: OrganizationalUnitScope|null,
     *     RegionScope?: RegionScope|null,
     *     PolicyTypeScope?: PolicyTypeScope|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
