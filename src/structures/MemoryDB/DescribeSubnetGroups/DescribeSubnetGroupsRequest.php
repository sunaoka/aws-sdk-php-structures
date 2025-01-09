<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeSubnetGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubnetGroupName
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeSubnetGroupsRequest extends Request
{
    /**
     * @param array{
     *     SubnetGroupName?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
