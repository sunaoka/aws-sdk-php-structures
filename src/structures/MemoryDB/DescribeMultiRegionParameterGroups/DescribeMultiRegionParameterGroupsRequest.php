<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeMultiRegionParameterGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $MultiRegionParameterGroupName
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeMultiRegionParameterGroupsRequest extends Request
{
    /**
     * @param array{
     *     MultiRegionParameterGroupName?: string|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
