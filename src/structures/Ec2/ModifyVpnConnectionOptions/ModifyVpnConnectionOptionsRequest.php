<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnConnectionOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpnConnectionId
 * @property string $LocalIpv4NetworkCidr
 * @property string $RemoteIpv4NetworkCidr
 * @property string $LocalIpv6NetworkCidr
 * @property string $RemoteIpv6NetworkCidr
 * @property bool $DryRun
 */
class ModifyVpnConnectionOptionsRequest extends Request
{
    /**
     * @param array{
     *     VpnConnectionId: string,
     *     LocalIpv4NetworkCidr?: string,
     *     RemoteIpv4NetworkCidr?: string,
     *     LocalIpv6NetworkCidr?: string,
     *     RemoteIpv6NetworkCidr?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
