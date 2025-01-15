<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeSourceRegions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $RegionName
 * @property int|null $MaxRecords
 * @property string|null $Marker
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeSourceRegionsRequest extends Request
{
    /**
     * @param array{
     *     RegionName?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
