<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeParameterGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ParameterGroupNames
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeParameterGroupsRequest extends Request
{
    /**
     * @param array{
     *     ParameterGroupNames?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
