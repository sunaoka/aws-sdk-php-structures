<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateResolverEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResolverEndpointId
 * @property string|null $Name
 * @property 'IPV6'|'IPV4'|'DUALSTACK'|null $ResolverEndpointType
 * @property list<Shapes\UpdateIpAddress>|null $UpdateIpAddresses
 * @property list<'DoH'|'Do53'|'DoH-FIPS'>|null $Protocols
 */
class UpdateResolverEndpointRequest extends Request
{
    /**
     * @param array{
     *     ResolverEndpointId: string,
     *     Name?: string|null,
     *     ResolverEndpointType?: 'IPV6'|'IPV4'|'DUALSTACK'|null,
     *     UpdateIpAddresses?: list<Shapes\UpdateIpAddress>|null,
     *     Protocols?: list<'DoH'|'Do53'|'DoH-FIPS'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
