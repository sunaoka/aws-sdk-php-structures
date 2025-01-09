<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribePublicIpv4Pools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $PoolIds
 * @property string $NextToken
 * @property int<1, 10> $MaxResults
 * @property list<Shapes\Filter> $Filters
 */
class DescribePublicIpv4PoolsRequest extends Request
{
    /**
     * @param array{
     *     PoolIds?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 10>,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
