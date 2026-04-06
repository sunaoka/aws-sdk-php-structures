<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnTunnelCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CustomerGatewayConfiguration
 * @property string|null $CustomerGatewayId
 * @property string|null $Category
 * @property 'pending'|'available'|'deleting'|'deleted'|null $State
 * @property 'ipsec.1'|null $Type
 * @property string|null $VpnConnectionId
 * @property string|null $VpnGatewayId
 * @property string|null $TransitGatewayId
 * @property string|null $CoreNetworkArn
 * @property string|null $CoreNetworkAttachmentArn
 * @property 'associated'|'not-associated'|'associating'|'disassociating'|null $GatewayAssociationState
 * @property VpnConnectionOptions|null $Options
 * @property list<VpnStaticRoute>|null $Routes
 * @property list<Tag>|null $Tags
 * @property list<VgwTelemetry>|null $VgwTelemetry
 */
class VpnConnection extends Shape
{
    /**
     * @param array{
     *     CustomerGatewayConfiguration?: string|null,
     *     CustomerGatewayId?: string|null,
     *     Category?: string|null,
     *     State?: 'pending'|'available'|'deleting'|'deleted'|null,
     *     Type?: 'ipsec.1'|null,
     *     VpnConnectionId?: string|null,
     *     VpnGatewayId?: string|null,
     *     TransitGatewayId?: string|null,
     *     CoreNetworkArn?: string|null,
     *     CoreNetworkAttachmentArn?: string|null,
     *     GatewayAssociationState?: 'associated'|'not-associated'|'associating'|'disassociating'|null,
     *     Options?: VpnConnectionOptions|null,
     *     Routes?: list<VpnStaticRoute>|null,
     *     Tags?: list<Tag>|null,
     *     VgwTelemetry?: list<VgwTelemetry>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
