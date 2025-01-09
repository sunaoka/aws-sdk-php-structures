<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverEndpointIpAddresses;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property list<Shapes\IpAddressResponse> $IpAddresses
 */
class ListResolverEndpointIpAddressesResponse extends Response
{
}
