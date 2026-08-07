<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamInternetRegistryAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string>|null $IpamInternetRegistryAssociationIds
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeIpamInternetRegistryAssociationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamInternetRegistryAssociationIds?: list<string>|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
