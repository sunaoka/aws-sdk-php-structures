<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBParameterGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBParameterGroupName
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeDBParameterGroupsRequest extends Request
{
    /**
     * @param array{
     *     DBParameterGroupName?: string,
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
