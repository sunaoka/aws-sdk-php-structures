<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateResolverEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CreatorRequestId
 * @property string|null $Name
 * @property list<string> $SecurityGroupIds
 * @property 'INBOUND'|'OUTBOUND' $Direction
 * @property list<Shapes\IpAddressRequest> $IpAddresses
 * @property list<Shapes\Tag>|null $Tags
 * @property 'IPV6'|'IPV4'|'DUALSTACK'|null $ResolverEndpointType
 * @property string|null $OutpostArn
 * @property string|null $PreferredInstanceType
 */
class CreateResolverEndpointRequest extends Request
{
    /**
     * @param array{
     *     CreatorRequestId: string,
     *     Name?: string|null,
     *     SecurityGroupIds: list<string>,
     *     Direction: 'INBOUND'|'OUTBOUND',
     *     IpAddresses: list<Shapes\IpAddressRequest>,
     *     Tags?: list<Shapes\Tag>|null,
     *     ResolverEndpointType?: 'IPV6'|'IPV4'|'DUALSTACK'|null,
     *     OutpostArn?: string|null,
     *     PreferredInstanceType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
