<?php

namespace Sunaoka\Aws\Structures\FMS\PutAdminAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Regions
 * @property bool $AllRegionsEnabled
 */
class RegionScope extends Shape
{
    /**
     * @param array{
     *     Regions?: list<string>,
     *     AllRegionsEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
