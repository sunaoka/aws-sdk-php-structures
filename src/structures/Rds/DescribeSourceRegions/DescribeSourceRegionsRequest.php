<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeSourceRegions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegionName
 * @property int $MaxRecords
 * @property string $Marker
 * @property list<Shapes\Filter> $Filters
 */
class DescribeSourceRegionsRequest extends Request
{
    /**
     * @param array{
     *     RegionName?: string,
     *     MaxRecords?: int,
     *     Marker?: string,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
