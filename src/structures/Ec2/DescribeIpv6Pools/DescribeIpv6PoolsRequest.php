<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpv6Pools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $PoolIds
 * @property string $NextToken
 * @property int $MaxResults
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 */
class DescribeIpv6PoolsRequest extends Request
{
    /**
     * @param array{
     *     PoolIds?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
