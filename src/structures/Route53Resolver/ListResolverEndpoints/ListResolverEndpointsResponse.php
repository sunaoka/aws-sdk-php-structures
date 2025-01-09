<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverEndpoints;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property list<Shapes\ResolverEndpoint> $ResolverEndpoints
 */
class ListResolverEndpointsResponse extends Response
{
}
