<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationPrefixListId
 * @property string $VpcEndpointId
 * @property string $TransitGatewayId
 * @property string $LocalGatewayId
 * @property string $CarrierGatewayId
 * @property string $CoreNetworkArn
 * @property bool $DryRun
 * @property string $RouteTableId
 * @property string $DestinationCidrBlock
 * @property string $GatewayId
 * @property string $DestinationIpv6CidrBlock
 * @property string $EgressOnlyInternetGatewayId
 * @property string $InstanceId
 * @property string $NetworkInterfaceId
 * @property string $VpcPeeringConnectionId
 * @property string $NatGatewayId
 */
class CreateRouteRequest extends Request
{
    /**
     * @param array{
     *     DestinationPrefixListId?: string,
     *     VpcEndpointId?: string,
     *     TransitGatewayId?: string,
     *     LocalGatewayId?: string,
     *     CarrierGatewayId?: string,
     *     CoreNetworkArn?: string,
     *     DryRun?: bool,
     *     RouteTableId: string,
     *     DestinationCidrBlock?: string,
     *     GatewayId?: string,
     *     DestinationIpv6CidrBlock?: string,
     *     EgressOnlyInternetGatewayId?: string,
     *     InstanceId?: string,
     *     NetworkInterfaceId?: string,
     *     VpcPeeringConnectionId?: string,
     *     NatGatewayId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
