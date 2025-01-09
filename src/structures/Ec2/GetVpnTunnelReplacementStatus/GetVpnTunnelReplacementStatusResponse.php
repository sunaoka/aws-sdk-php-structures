<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVpnTunnelReplacementStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $VpnConnectionId
 * @property string $TransitGatewayId
 * @property string $CustomerGatewayId
 * @property string $VpnGatewayId
 * @property string $VpnTunnelOutsideIpAddress
 * @property Shapes\MaintenanceDetails $MaintenanceDetails
 */
class GetVpnTunnelReplacementStatusResponse extends Response
{
}
