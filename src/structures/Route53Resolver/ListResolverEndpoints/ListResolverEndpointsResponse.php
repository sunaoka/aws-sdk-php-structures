<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverEndpoints;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property list<Shapes\ResolverEndpoint>|null $ResolverEndpoints
 */
class ListResolverEndpointsResponse extends Response
{
}
