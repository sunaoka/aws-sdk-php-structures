<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnTunnelCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableAcceleration
 * @property bool $StaticRoutesOnly
 * @property string $LocalIpv4NetworkCidr
 * @property string $RemoteIpv4NetworkCidr
 * @property string $LocalIpv6NetworkCidr
 * @property string $RemoteIpv6NetworkCidr
 * @property string $OutsideIpAddressType
 * @property string $TransportTransitGatewayAttachmentId
 * @property 'ipv4'|'ipv6' $TunnelInsideIpVersion
 * @property list<TunnelOption> $TunnelOptions
 */
class VpnConnectionOptions extends Shape
{
    /**
     * @param array{
     *     EnableAcceleration?: bool,
     *     StaticRoutesOnly?: bool,
     *     LocalIpv4NetworkCidr?: string,
     *     RemoteIpv4NetworkCidr?: string,
     *     LocalIpv6NetworkCidr?: string,
     *     RemoteIpv6NetworkCidr?: string,
     *     OutsideIpAddressType?: string,
     *     TransportTransitGatewayAttachmentId?: string,
     *     TunnelInsideIpVersion?: 'ipv4'|'ipv6',
     *     TunnelOptions?: list<TunnelOption>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
