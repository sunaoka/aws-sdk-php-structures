<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeSubnetGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SubnetGroupName
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeSubnetGroupsRequest extends Request
{
    /**
     * @param array{
     *     SubnetGroupName?: string|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
