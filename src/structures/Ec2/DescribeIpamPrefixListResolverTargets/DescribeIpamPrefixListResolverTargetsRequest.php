<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamPrefixListResolverTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property list<string>|null $IpamPrefixListResolverTargetIds
 * @property string|null $IpamPrefixListResolverId
 */
class DescribeIpamPrefixListResolverTargetsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null,
     *     IpamPrefixListResolverTargetIds?: list<string>|null,
     *     IpamPrefixListResolverId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
