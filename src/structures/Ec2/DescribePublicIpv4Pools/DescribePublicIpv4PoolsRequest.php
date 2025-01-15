<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribePublicIpv4Pools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $PoolIds
 * @property string|null $NextToken
 * @property int<1, 10>|null $MaxResults
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribePublicIpv4PoolsRequest extends Request
{
    /**
     * @param array{
     *     PoolIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 10>|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
