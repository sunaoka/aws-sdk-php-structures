<?php

namespace Sunaoka\Aws\Structures\Ec2\TerminateClientVpnConnections;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ClientVpnEndpointId
 * @property string $Username
 * @property list<Shapes\TerminateConnectionStatus> $ConnectionStatuses
 */
class TerminateClientVpnConnectionsResponse extends Response
{
}
