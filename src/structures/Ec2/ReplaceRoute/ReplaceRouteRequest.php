<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DestinationCidrBlock
 * @property string|null $DestinationIpv6CidrBlock
 * @property string|null $DestinationPrefixListId
 * @property bool|null $DryRun
 * @property string|null $VpcEndpointId
 * @property string|null $EgressOnlyInternetGatewayId
 * @property string|null $GatewayId
 * @property string|null $InstanceId
 * @property bool|null $LocalTarget
 * @property string|null $NatGatewayId
 * @property string|null $TransitGatewayId
 * @property string|null $LocalGatewayId
 * @property string|null $CarrierGatewayId
 * @property string|null $NetworkInterfaceId
 * @property string $RouteTableId
 * @property string|null $VpcPeeringConnectionId
 * @property string|null $CoreNetworkArn
 */
class ReplaceRouteRequest extends Request
{
    /**
     * @param array{
     *     DestinationCidrBlock?: string|null,
     *     DestinationIpv6CidrBlock?: string|null,
     *     DestinationPrefixListId?: string|null,
     *     DryRun?: bool|null,
     *     VpcEndpointId?: string|null,
     *     EgressOnlyInternetGatewayId?: string|null,
     *     GatewayId?: string|null,
     *     InstanceId?: string|null,
     *     LocalTarget?: bool|null,
     *     NatGatewayId?: string|null,
     *     TransitGatewayId?: string|null,
     *     LocalGatewayId?: string|null,
     *     CarrierGatewayId?: string|null,
     *     NetworkInterfaceId?: string|null,
     *     RouteTableId: string,
     *     VpcPeeringConnectionId?: string|null,
     *     CoreNetworkArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
