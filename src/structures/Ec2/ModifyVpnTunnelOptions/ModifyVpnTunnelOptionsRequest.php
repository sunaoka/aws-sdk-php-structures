<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnTunnelOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpnConnectionId
 * @property string $VpnTunnelOutsideIpAddress
 * @property Shapes\ModifyVpnTunnelOptionsSpecification $TunnelOptions
 * @property bool $DryRun
 * @property bool $SkipTunnelReplacement
 */
class ModifyVpnTunnelOptionsRequest extends Request
{
    /**
     * @param array{
     *     VpnConnectionId: string,
     *     VpnTunnelOutsideIpAddress: string,
     *     TunnelOptions: Shapes\ModifyVpnTunnelOptionsSpecification,
     *     DryRun?: bool,
     *     SkipTunnelReplacement?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
