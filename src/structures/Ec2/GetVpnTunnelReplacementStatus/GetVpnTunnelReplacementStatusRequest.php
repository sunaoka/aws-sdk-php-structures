<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVpnTunnelReplacementStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpnConnectionId
 * @property string $VpnTunnelOutsideIpAddress
 * @property bool $DryRun
 */
class GetVpnTunnelReplacementStatusRequest extends Request
{
    /**
     * @param array{
     *     VpnConnectionId: string,
     *     VpnTunnelOutsideIpAddress: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
