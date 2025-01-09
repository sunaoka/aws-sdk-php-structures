<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeParameterGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParameterGroupName
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeParameterGroupsRequest extends Request
{
    /**
     * @param array{
     *     ParameterGroupName?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
