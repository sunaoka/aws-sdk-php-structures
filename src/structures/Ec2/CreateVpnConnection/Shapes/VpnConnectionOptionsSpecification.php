<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpnConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableAcceleration
 * @property 'ipv4'|'ipv6' $TunnelInsideIpVersion
 * @property list<VpnTunnelOptionsSpecification> $TunnelOptions
 * @property string $LocalIpv4NetworkCidr
 * @property string $RemoteIpv4NetworkCidr
 * @property string $LocalIpv6NetworkCidr
 * @property string $RemoteIpv6NetworkCidr
 * @property string $OutsideIpAddressType
 * @property string $TransportTransitGatewayAttachmentId
 * @property bool $StaticRoutesOnly
 */
class VpnConnectionOptionsSpecification extends Shape
{
    /**
     * @param array{
     *     EnableAcceleration?: bool,
     *     TunnelInsideIpVersion?: 'ipv4'|'ipv6',
     *     TunnelOptions?: list<VpnTunnelOptionsSpecification>,
     *     LocalIpv4NetworkCidr?: string,
     *     RemoteIpv4NetworkCidr?: string,
     *     LocalIpv6NetworkCidr?: string,
     *     RemoteIpv6NetworkCidr?: string,
     *     OutsideIpAddressType?: string,
     *     TransportTransitGatewayAttachmentId?: string,
     *     StaticRoutesOnly?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
