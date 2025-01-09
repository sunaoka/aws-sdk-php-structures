<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeIpGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $GroupIds
 * @property string $NextToken
 * @property int<1, 25> $MaxResults
 */
class DescribeIpGroupsRequest extends Request
{
    /**
     * @param array{
     *     GroupIds?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 25>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
