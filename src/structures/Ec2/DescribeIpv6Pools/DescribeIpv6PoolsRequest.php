<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpv6Pools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $PoolIds
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeIpv6PoolsRequest extends Request
{
    /**
     * @param array{
     *     PoolIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
