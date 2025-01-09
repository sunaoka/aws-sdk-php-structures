<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateResolverEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResolverEndpointId
 * @property string $Name
 * @property 'IPV6'|'IPV4'|'DUALSTACK' $ResolverEndpointType
 * @property list<Shapes\UpdateIpAddress> $UpdateIpAddresses
 * @property list<'DoH'|'Do53'|'DoH-FIPS'> $Protocols
 */
class UpdateResolverEndpointRequest extends Request
{
    /**
     * @param array{
     *     ResolverEndpointId: string,
     *     Name?: string,
     *     ResolverEndpointType?: 'IPV6'|'IPV4'|'DUALSTACK',
     *     UpdateIpAddresses?: list<Shapes\UpdateIpAddress>,
     *     Protocols?: list<'DoH'|'Do53'|'DoH-FIPS'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
