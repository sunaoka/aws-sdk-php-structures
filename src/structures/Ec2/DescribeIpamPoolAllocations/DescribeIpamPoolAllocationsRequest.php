<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamPoolAllocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string>|null $IpamPoolAllocationIds
 * @property list<Shapes\Filter>|null $Filters
 * @property int<1000, 100000>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeIpamPoolAllocationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamPoolAllocationIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<1000, 100000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
