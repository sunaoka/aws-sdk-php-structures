<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnTargetNetworks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property list<string>|null $AssociationIds
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 */
class DescribeClientVpnTargetNetworksRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     AssociationIds?: list<string>|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
