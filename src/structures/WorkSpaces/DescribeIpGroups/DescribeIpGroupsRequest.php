<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeIpGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $GroupIds
 * @property string|null $NextToken
 * @property int<1, 25>|null $MaxResults
 */
class DescribeIpGroupsRequest extends Request
{
    /**
     * @param array{
     *     GroupIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 25>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
