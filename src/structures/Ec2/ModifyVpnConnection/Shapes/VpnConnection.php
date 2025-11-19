<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Category
 * @property string|null $TransitGatewayId
 * @property string|null $VpnConcentratorId
 * @property string|null $CoreNetworkArn
 * @property string|null $CoreNetworkAttachmentArn
 * @property 'associated'|'not-associated'|'associating'|'disassociating'|null $GatewayAssociationState
 * @property VpnConnectionOptions|null $Options
 * @property list<VpnStaticRoute>|null $Routes
 * @property list<Tag>|null $Tags
 * @property list<VgwTelemetry>|null $VgwTelemetry
 * @property string|null $PreSharedKeyArn
 * @property string|null $VpnConnectionId
 * @property 'pending'|'available'|'deleting'|'deleted'|null $State
 * @property string|null $CustomerGatewayConfiguration
 * @property 'ipsec.1'|null $Type
 * @property string|null $CustomerGatewayId
 * @property string|null $VpnGatewayId
 */
class VpnConnection extends Shape
{
    /**
     * @param array{
     *     Category?: string|null,
     *     TransitGatewayId?: string|null,
     *     VpnConcentratorId?: string|null,
     *     CoreNetworkArn?: string|null,
     *     CoreNetworkAttachmentArn?: string|null,
     *     GatewayAssociationState?: 'associated'|'not-associated'|'associating'|'disassociating'|null,
     *     Options?: VpnConnectionOptions|null,
     *     Routes?: list<VpnStaticRoute>|null,
     *     Tags?: list<Tag>|null,
     *     VgwTelemetry?: list<VgwTelemetry>|null,
     *     PreSharedKeyArn?: string|null,
     *     VpnConnectionId?: string|null,
     *     State?: 'pending'|'available'|'deleting'|'deleted'|null,
     *     CustomerGatewayConfiguration?: string|null,
     *     Type?: 'ipsec.1'|null,
     *     CustomerGatewayId?: string|null,
     *     VpnGatewayId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
