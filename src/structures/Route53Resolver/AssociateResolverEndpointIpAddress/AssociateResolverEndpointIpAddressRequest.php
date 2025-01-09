<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\AssociateResolverEndpointIpAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResolverEndpointId
 * @property Shapes\IpAddressUpdate $IpAddress
 */
class AssociateResolverEndpointIpAddressRequest extends Request
{
    /**
     * @param array{
     *     ResolverEndpointId: string,
     *     IpAddress: Shapes\IpAddressUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
