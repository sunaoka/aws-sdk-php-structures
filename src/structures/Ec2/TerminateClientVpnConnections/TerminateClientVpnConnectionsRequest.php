<?php

namespace Sunaoka\Aws\Structures\Ec2\TerminateClientVpnConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property string|null $ConnectionId
 * @property string|null $Username
 * @property bool|null $DryRun
 */
class TerminateClientVpnConnectionsRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     ConnectionId?: string|null,
     *     Username?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
