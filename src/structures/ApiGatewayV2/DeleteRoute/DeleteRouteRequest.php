<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $RouteId
 */
class DeleteRouteRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     RouteId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
