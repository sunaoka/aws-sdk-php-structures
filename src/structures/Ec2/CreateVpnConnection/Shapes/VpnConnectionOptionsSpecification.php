<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpnConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableAcceleration
 * @property 'ipv4'|'ipv6'|null $TunnelInsideIpVersion
 * @property list<VpnTunnelOptionsSpecification>|null $TunnelOptions
 * @property string|null $LocalIpv4NetworkCidr
 * @property string|null $RemoteIpv4NetworkCidr
 * @property string|null $LocalIpv6NetworkCidr
 * @property string|null $RemoteIpv6NetworkCidr
 * @property string|null $OutsideIpAddressType
 * @property string|null $TransportTransitGatewayAttachmentId
 * @property 'standard'|'large'|null $TunnelBandwidth
 * @property bool|null $StaticRoutesOnly
 */
class VpnConnectionOptionsSpecification extends Shape
{
    /**
     * @param array{
     *     EnableAcceleration?: bool|null,
     *     TunnelInsideIpVersion?: 'ipv4'|'ipv6'|null,
     *     TunnelOptions?: list<VpnTunnelOptionsSpecification>|null,
     *     LocalIpv4NetworkCidr?: string|null,
     *     RemoteIpv4NetworkCidr?: string|null,
     *     LocalIpv6NetworkCidr?: string|null,
     *     RemoteIpv6NetworkCidr?: string|null,
     *     OutsideIpAddressType?: string|null,
     *     TransportTransitGatewayAttachmentId?: string|null,
     *     TunnelBandwidth?: 'standard'|'large'|null,
     *     StaticRoutesOnly?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
