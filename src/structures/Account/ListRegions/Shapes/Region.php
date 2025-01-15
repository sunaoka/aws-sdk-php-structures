<?php

namespace Sunaoka\Aws\Structures\Account\ListRegions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegionName
 * @property 'ENABLED'|'ENABLING'|'DISABLING'|'DISABLED'|'ENABLED_BY_DEFAULT'|null $RegionOptStatus
 */
class Region extends Shape
{
    /**
     * @param array{
     *     RegionName?: string|null,
     *     RegionOptStatus?: 'ENABLED'|'ENABLING'|'DISABLING'|'DISABLED'|'ENABLED_BY_DEFAULT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
