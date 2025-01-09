<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamResourceDiscoveryAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $IpamResourceDiscoveryAssociationIds
 * @property string $NextToken
 * @property int $MaxResults
 * @property list<Shapes\Filter> $Filters
 */
class DescribeIpamResourceDiscoveryAssociationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamResourceDiscoveryAssociationIds?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
