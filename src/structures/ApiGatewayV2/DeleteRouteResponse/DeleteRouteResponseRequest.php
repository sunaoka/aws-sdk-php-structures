<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteRouteResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $RouteId
 * @property string $RouteResponseId
 */
class DeleteRouteResponseRequest extends Request
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
