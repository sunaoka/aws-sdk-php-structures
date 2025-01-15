<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeParameterGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ParameterGroupNames
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeParameterGroupsRequest extends Request
{
    /**
     * @param array{
     *     ParameterGroupNames?: list<string>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
