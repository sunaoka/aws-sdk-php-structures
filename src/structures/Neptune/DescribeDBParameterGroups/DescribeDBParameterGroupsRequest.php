<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeDBParameterGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DBParameterGroupName
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeDBParameterGroupsRequest extends Request
{
    /**
     * @param array{
     *     DBParameterGroupName?: string|null,
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
