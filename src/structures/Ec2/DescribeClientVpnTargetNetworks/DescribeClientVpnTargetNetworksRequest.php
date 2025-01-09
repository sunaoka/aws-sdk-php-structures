<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnTargetNetworks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property list<string> $AssociationIds
 * @property int<5, 1000> $MaxResults
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 * @property bool $DryRun
 */
class DescribeClientVpnTargetNetworksRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     AssociationIds?: list<string>,
     *     MaxResults?: int<5, 1000>,
     *     NextToken?: string,
     *     Filters?: list<Shapes\Filter>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
