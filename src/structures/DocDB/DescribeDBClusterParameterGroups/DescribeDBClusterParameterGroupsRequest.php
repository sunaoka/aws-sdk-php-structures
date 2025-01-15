<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeDBClusterParameterGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DBClusterParameterGroupName
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeDBClusterParameterGroupsRequest extends Request
{
    /**
     * @param array{
     *     DBClusterParameterGroupName?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
