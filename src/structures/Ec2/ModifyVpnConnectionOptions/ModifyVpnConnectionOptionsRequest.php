<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnConnectionOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpnConnectionId
 * @property string|null $LocalIpv4NetworkCidr
 * @property string|null $RemoteIpv4NetworkCidr
 * @property string|null $LocalIpv6NetworkCidr
 * @property string|null $RemoteIpv6NetworkCidr
 * @property bool|null $DryRun
 */
class ModifyVpnConnectionOptionsRequest extends Request
{
    /**
     * @param array{
     *     VpnConnectionId: string,
     *     LocalIpv4NetworkCidr?: string|null,
     *     RemoteIpv4NetworkCidr?: string|null,
     *     LocalIpv6NetworkCidr?: string|null,
     *     RemoteIpv6NetworkCidr?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
