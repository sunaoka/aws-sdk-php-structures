<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamResourceDiscoveries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string>|null $IpamResourceDiscoveryIds
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeIpamResourceDiscoveriesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamResourceDiscoveryIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 1000>|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
