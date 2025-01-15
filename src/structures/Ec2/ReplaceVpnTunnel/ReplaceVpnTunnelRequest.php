<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceVpnTunnel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpnConnectionId
 * @property string $VpnTunnelOutsideIpAddress
 * @property bool|null $ApplyPendingMaintenance
 * @property bool|null $DryRun
 */
class ReplaceVpnTunnelRequest extends Request
{
    /**
     * @param array{
     *     VpnConnectionId: string,
     *     VpnTunnelOutsideIpAddress: string,
     *     ApplyPendingMaintenance?: bool|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
