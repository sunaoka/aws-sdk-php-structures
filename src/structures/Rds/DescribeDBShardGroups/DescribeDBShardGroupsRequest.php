<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBShardGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBShardGroupIdentifier
 * @property list<Shapes\Filter> $Filters
 * @property string $Marker
 * @property int<20, 100> $MaxRecords
 */
class DescribeDBShardGroupsRequest extends Request
{
    /**
     * @param array{
     *     DBShardGroupIdentifier?: string,
     *     Filters?: list<Shapes\Filter>,
     *     Marker?: string,
     *     MaxRecords?: int<20, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
