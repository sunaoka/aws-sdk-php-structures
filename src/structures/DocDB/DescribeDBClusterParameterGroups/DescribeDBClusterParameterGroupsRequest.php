<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeDBClusterParameterGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterParameterGroupName
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeDBClusterParameterGroupsRequest extends Request
{
    /**
     * @param array{
     *     DBClusterParameterGroupName?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
