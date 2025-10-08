<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteRouteResponse;

trait DeleteRouteResponseTrait
{
    /**
     * @param DeleteRouteResponseRequest $args
     * @return void
     */
    public function deleteRouteResponse(DeleteRouteResponseRequest $args)
    {
        parent::deleteRouteResponse($args->toArray());
    }
}
