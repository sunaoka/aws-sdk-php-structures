<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListRegions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegionName
 * @property 'ACTIVE'|'ADDING'|'REMOVING'|null $Status
 * @property \Aws\Api\DateTimeResult|null $AddedDate
 * @property bool|null $IsPrimaryRegion
 */
class RegionMetadata extends Shape
{
    /**
     * @param array{
     *     RegionName?: string|null,
     *     Status?: 'ACTIVE'|'ADDING'|'REMOVING'|null,
     *     AddedDate?: \Aws\Api\DateTimeResult|null,
     *     IsPrimaryRegion?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
