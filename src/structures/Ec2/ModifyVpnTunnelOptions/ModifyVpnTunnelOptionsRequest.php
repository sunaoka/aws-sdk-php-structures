<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnTunnelOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpnConnectionId
 * @property string $VpnTunnelOutsideIpAddress
 * @property Shapes\ModifyVpnTunnelOptionsSpecification $TunnelOptions
 * @property bool|null $DryRun
 * @property bool|null $SkipTunnelReplacement
 */
class ModifyVpnTunnelOptionsRequest extends Request
{
    /**
     * @param array{
     *     VpnConnectionId: string,
     *     VpnTunnelOutsideIpAddress: string,
     *     TunnelOptions: Shapes\ModifyVpnTunnelOptionsSpecification,
     *     DryRun?: bool|null,
     *     SkipTunnelReplacement?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
