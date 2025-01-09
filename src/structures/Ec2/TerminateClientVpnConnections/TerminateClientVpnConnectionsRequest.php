<?php

namespace Sunaoka\Aws\Structures\Ec2\TerminateClientVpnConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property string $ConnectionId
 * @property string $Username
 * @property bool $DryRun
 */
class TerminateClientVpnConnectionsRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     ConnectionId?: string,
     *     Username?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
