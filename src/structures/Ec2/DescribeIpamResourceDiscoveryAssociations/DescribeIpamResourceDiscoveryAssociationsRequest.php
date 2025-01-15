<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamResourceDiscoveryAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string>|null $IpamResourceDiscoveryAssociationIds
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeIpamResourceDiscoveryAssociationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamResourceDiscoveryAssociationIds?: list<string>|null,
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
