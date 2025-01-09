<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverEndpointIpAddresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResolverEndpointId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListResolverEndpointIpAddressesRequest extends Request
{
    /**
     * @param array{
     *     ResolverEndpointId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
