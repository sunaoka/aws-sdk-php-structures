<?php

namespace Sunaoka\Aws\Structures\Ec2\GetNetworkInsightsAccessScopeAnalysisFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationCidr
 * @property string|null $DestinationPrefixListId
 * @property string|null $EgressOnlyInternetGatewayId
 * @property string|null $GatewayId
 * @property string|null $InstanceId
 * @property string|null $NatGatewayId
 * @property string|null $NetworkInterfaceId
 * @property string|null $Origin
 * @property string|null $TransitGatewayId
 * @property string|null $VpcPeeringConnectionId
 * @property string|null $State
 * @property string|null $CarrierGatewayId
 * @property string|null $CoreNetworkArn
 * @property string|null $LocalGatewayId
 */
class AnalysisRouteTableRoute extends Shape
{
    /**
     * @param array{
     *     DestinationCidr?: string|null,
     *     DestinationPrefixListId?: string|null,
     *     EgressOnlyInternetGatewayId?: string|null,
     *     GatewayId?: string|null,
     *     InstanceId?: string|null,
     *     NatGatewayId?: string|null,
     *     NetworkInterfaceId?: string|null,
     *     Origin?: string|null,
     *     TransitGatewayId?: string|null,
     *     VpcPeeringConnectionId?: string|null,
     *     State?: string|null,
     *     CarrierGatewayId?: string|null,
     *     CoreNetworkArn?: string|null,
     *     LocalGatewayId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
