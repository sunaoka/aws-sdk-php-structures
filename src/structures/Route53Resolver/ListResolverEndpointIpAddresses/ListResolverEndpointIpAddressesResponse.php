<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverEndpointIpAddresses;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property list<Shapes\IpAddressResponse>|null $IpAddresses
 */
class ListResolverEndpointIpAddressesResponse extends Response
{
}
