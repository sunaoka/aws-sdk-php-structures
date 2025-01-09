<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamPools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property int<5, 1000> $MaxResults
 * @property string $NextToken
 * @property list<string> $IpamPoolIds
 */
class DescribeIpamPoolsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int<5, 1000>,
     *     NextToken?: string,
     *     IpamPoolIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
