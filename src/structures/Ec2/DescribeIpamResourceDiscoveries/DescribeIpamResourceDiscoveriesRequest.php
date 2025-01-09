<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamResourceDiscoveries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $IpamResourceDiscoveryIds
 * @property string $NextToken
 * @property int<5, 1000> $MaxResults
 * @property list<Shapes\Filter> $Filters
 */
class DescribeIpamResourceDiscoveriesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamResourceDiscoveryIds?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int<5, 1000>,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
