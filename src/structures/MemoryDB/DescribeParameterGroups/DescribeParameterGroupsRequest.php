<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeParameterGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ParameterGroupName
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeParameterGroupsRequest extends Request
{
    /**
     * @param array{
     *     ParameterGroupName?: string|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
