<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBShardGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DBShardGroupIdentifier
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $Marker
 * @property int<20, 100>|null $MaxRecords
 */
class DescribeDBShardGroupsRequest extends Request
{
    /**
     * @param array{
     *     DBShardGroupIdentifier?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     Marker?: string|null,
     *     MaxRecords?: int<20, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
