<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnConnectionOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Category
 * @property string $TransitGatewayId
 * @property string $CoreNetworkArn
 * @property string $CoreNetworkAttachmentArn
 * @property 'associated'|'not-associated'|'associating'|'disassociating' $GatewayAssociationState
 * @property VpnConnectionOptions $Options
 * @property list<VpnStaticRoute> $Routes
 * @property list<Tag> $Tags
 * @property list<VgwTelemetry> $VgwTelemetry
 * @property string $VpnConnectionId
 * @property 'pending'|'available'|'deleting'|'deleted' $State
 * @property string $CustomerGatewayConfiguration
 * @property 'ipsec.1' $Type
 * @property string $CustomerGatewayId
 * @property string $VpnGatewayId
 */
class VpnConnection extends Shape
{
    /**
     * @param array{
     *     Category?: string,
     *     TransitGatewayId?: string,
     *     CoreNetworkArn?: string,
     *     CoreNetworkAttachmentArn?: string,
     *     GatewayAssociationState?: 'associated'|'not-associated'|'associating'|'disassociating',
     *     Options?: VpnConnectionOptions,
     *     Routes?: list<VpnStaticRoute>,
     *     Tags?: list<Tag>,
     *     VgwTelemetry?: list<VgwTelemetry>,
     *     VpnConnectionId?: string,
     *     State?: 'pending'|'available'|'deleting'|'deleted',
     *     CustomerGatewayConfiguration?: string,
     *     Type?: 'ipsec.1',
     *     CustomerGatewayId?: string,
     *     VpnGatewayId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
