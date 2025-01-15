<?php

namespace Sunaoka\Aws\Structures\Ec2\TerminateClientVpnConnections;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ClientVpnEndpointId
 * @property string|null $Username
 * @property list<Shapes\TerminateConnectionStatus>|null $ConnectionStatuses
 */
class TerminateClientVpnConnectionsResponse extends Response
{
}
