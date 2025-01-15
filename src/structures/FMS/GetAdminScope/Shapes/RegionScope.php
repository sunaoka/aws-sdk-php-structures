<?php

namespace Sunaoka\Aws\Structures\FMS\GetAdminScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Regions
 * @property bool|null $AllRegionsEnabled
 */
class RegionScope extends Shape
{
    /**
     * @param array{
     *     Regions?: list<string>|null,
     *     AllRegionsEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
