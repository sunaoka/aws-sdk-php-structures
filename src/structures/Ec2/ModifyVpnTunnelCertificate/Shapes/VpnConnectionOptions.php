<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnTunnelCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableAcceleration
 * @property bool|null $StaticRoutesOnly
 * @property string|null $LocalIpv4NetworkCidr
 * @property string|null $RemoteIpv4NetworkCidr
 * @property string|null $LocalIpv6NetworkCidr
 * @property string|null $RemoteIpv6NetworkCidr
 * @property string|null $OutsideIpAddressType
 * @property string|null $TransportTransitGatewayAttachmentId
 * @property 'ipv4'|'ipv6'|null $TunnelInsideIpVersion
 * @property list<TunnelOption>|null $TunnelOptions
 * @property 'standard'|'large'|null $TunnelBandwidth
 */
class VpnConnectionOptions extends Shape
{
    /**
     * @param array{
     *     EnableAcceleration?: bool|null,
     *     StaticRoutesOnly?: bool|null,
     *     LocalIpv4NetworkCidr?: string|null,
     *     RemoteIpv4NetworkCidr?: string|null,
     *     LocalIpv6NetworkCidr?: string|null,
     *     RemoteIpv6NetworkCidr?: string|null,
     *     OutsideIpAddressType?: string|null,
     *     TransportTransitGatewayAttachmentId?: string|null,
     *     TunnelInsideIpVersion?: 'ipv4'|'ipv6'|null,
     *     TunnelOptions?: list<TunnelOption>|null,
     *     TunnelBandwidth?: 'standard'|'large'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
