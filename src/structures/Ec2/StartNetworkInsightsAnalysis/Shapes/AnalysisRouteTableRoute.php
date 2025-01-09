<?php

namespace Sunaoka\Aws\Structures\Ec2\StartNetworkInsightsAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationCidr
 * @property string $DestinationPrefixListId
 * @property string $EgressOnlyInternetGatewayId
 * @property string $GatewayId
 * @property string $InstanceId
 * @property string $NatGatewayId
 * @property string $NetworkInterfaceId
 * @property string $Origin
 * @property string $TransitGatewayId
 * @property string $VpcPeeringConnectionId
 * @property string $State
 * @property string $CarrierGatewayId
 * @property string $CoreNetworkArn
 * @property string $LocalGatewayId
 */
class AnalysisRouteTableRoute extends Shape
{
    /**
     * @param array{
     *     DestinationCidr?: string,
     *     DestinationPrefixListId?: string,
     *     EgressOnlyInternetGatewayId?: string,
     *     GatewayId?: string,
     *     InstanceId?: string,
     *     NatGatewayId?: string,
     *     NetworkInterfaceId?: string,
     *     Origin?: string,
     *     TransitGatewayId?: string,
     *     VpcPeeringConnectionId?: string,
     *     State?: string,
     *     CarrierGatewayId?: string,
     *     CoreNetworkArn?: string,
     *     LocalGatewayId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
