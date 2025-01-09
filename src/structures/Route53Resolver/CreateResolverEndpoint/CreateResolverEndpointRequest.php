<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateResolverEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CreatorRequestId
 * @property string $Name
 * @property list<string> $SecurityGroupIds
 * @property 'INBOUND'|'OUTBOUND' $Direction
 * @property list<Shapes\IpAddressRequest> $IpAddresses
 * @property string $OutpostArn
 * @property string $PreferredInstanceType
 * @property list<Shapes\Tag> $Tags
 * @property 'IPV6'|'IPV4'|'DUALSTACK' $ResolverEndpointType
 * @property list<'DoH'|'Do53'|'DoH-FIPS'> $Protocols
 */
class CreateResolverEndpointRequest extends Request
{
    /**
     * @param array{
     *     CreatorRequestId: string,
     *     Name?: string,
     *     SecurityGroupIds: list<string>,
     *     Direction: 'INBOUND'|'OUTBOUND',
     *     IpAddresses: list<Shapes\IpAddressRequest>,
     *     OutpostArn?: string,
     *     PreferredInstanceType?: string,
     *     Tags?: list<Shapes\Tag>,
     *     ResolverEndpointType?: 'IPV6'|'IPV4'|'DUALSTACK',
     *     Protocols?: list<'DoH'|'Do53'|'DoH-FIPS'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
