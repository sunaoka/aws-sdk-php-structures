<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetRouteResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $RouteId
 * @property string $RouteResponseId
 */
class GetRouteResponseRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     RouteId: string,
     *     RouteResponseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
