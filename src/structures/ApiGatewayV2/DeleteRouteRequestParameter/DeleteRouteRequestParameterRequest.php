<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteRouteRequestParameter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $RequestParameterKey
 * @property string $RouteId
 */
class DeleteRouteRequestParameterRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     RequestParameterKey: string,
     *     RouteId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
