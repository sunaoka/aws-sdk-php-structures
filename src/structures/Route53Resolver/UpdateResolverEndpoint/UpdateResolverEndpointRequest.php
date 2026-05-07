<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateResolverEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResolverEndpointId
 * @property string|null $Name
 * @property 'IPV6'|'IPV4'|'DUALSTACK'|null $ResolverEndpointType
 * @property list<Shapes\UpdateIpAddress>|null $UpdateIpAddresses
 * @property list<'DoH'|'Do53'|'DoH-FIPS'>|null $Protocols
 * @property bool|null $RniEnhancedMetricsEnabled
 * @property bool|null $TargetNameServerMetricsEnabled
 * @property bool|null $Dns64Enabled
 * @property bool|null $Ipv6InternetAccessEnabled
 */
class UpdateResolverEndpointRequest extends Request
{
    /**
     * @param array{
     *     ResolverEndpointId: string,
     *     Name?: string|null,
     *     ResolverEndpointType?: 'IPV6'|'IPV4'|'DUALSTACK'|null,
     *     UpdateIpAddresses?: list<Shapes\UpdateIpAddress>|null,
     *     Protocols?: list<'DoH'|'Do53'|'DoH-FIPS'>|null,
     *     RniEnhancedMetricsEnabled?: bool|null,
     *     TargetNameServerMetricsEnabled?: bool|null,
     *     Dns64Enabled?: bool|null,
     *     Ipv6InternetAccessEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
