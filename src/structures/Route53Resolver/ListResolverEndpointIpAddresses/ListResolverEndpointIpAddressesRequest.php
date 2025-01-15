<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverEndpointIpAddresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResolverEndpointId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListResolverEndpointIpAddressesRequest extends Request
{
    /**
     * @param array{
     *     ResolverEndpointId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
