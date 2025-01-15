<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DestinationPrefixListId
 * @property string|null $VpcEndpointId
 * @property string|null $TransitGatewayId
 * @property string|null $LocalGatewayId
 * @property string|null $CarrierGatewayId
 * @property string|null $CoreNetworkArn
 * @property bool|null $DryRun
 * @property string $RouteTableId
 * @property string|null $DestinationCidrBlock
 * @property string|null $GatewayId
 * @property string|null $DestinationIpv6CidrBlock
 * @property string|null $EgressOnlyInternetGatewayId
 * @property string|null $InstanceId
 * @property string|null $NetworkInterfaceId
 * @property string|null $VpcPeeringConnectionId
 * @property string|null $NatGatewayId
 */
class CreateRouteRequest extends Request
{
    /**
     * @param array{
     *     DestinationPrefixListId?: string|null,
     *     VpcEndpointId?: string|null,
     *     TransitGatewayId?: string|null,
     *     LocalGatewayId?: string|null,
     *     CarrierGatewayId?: string|null,
     *     CoreNetworkArn?: string|null,
     *     DryRun?: bool|null,
     *     RouteTableId: string,
     *     DestinationCidrBlock?: string|null,
     *     GatewayId?: string|null,
     *     DestinationIpv6CidrBlock?: string|null,
     *     EgressOnlyInternetGatewayId?: string|null,
     *     InstanceId?: string|null,
     *     NetworkInterfaceId?: string|null,
     *     VpcPeeringConnectionId?: string|null,
     *     NatGatewayId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
