<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetRouteResponses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string|null $MaxResults
 * @property string|null $NextToken
 * @property string $RouteId
 */
class GetRouteResponsesRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     MaxResults?: string|null,
     *     NextToken?: string|null,
     *     RouteId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
