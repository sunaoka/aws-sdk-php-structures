<?php

namespace Sunaoka\Aws\Structures\Account\ListRegions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegionName
 * @property 'ENABLED'|'ENABLING'|'DISABLING'|'DISABLED'|'ENABLED_BY_DEFAULT' $RegionOptStatus
 */
class Region extends Shape
{
    /**
     * @param array{
     *     RegionName?: string,
     *     RegionOptStatus?: 'ENABLED'|'ENABLING'|'DISABLING'|'DISABLED'|'ENABLED_BY_DEFAULT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
