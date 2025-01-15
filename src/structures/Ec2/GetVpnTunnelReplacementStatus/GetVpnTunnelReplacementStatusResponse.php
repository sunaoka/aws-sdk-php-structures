<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVpnTunnelReplacementStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $VpnConnectionId
 * @property string|null $TransitGatewayId
 * @property string|null $CustomerGatewayId
 * @property string|null $VpnGatewayId
 * @property string|null $VpnTunnelOutsideIpAddress
 * @property Shapes\MaintenanceDetails|null $MaintenanceDetails
 */
class GetVpnTunnelReplacementStatusResponse extends Response
{
}
