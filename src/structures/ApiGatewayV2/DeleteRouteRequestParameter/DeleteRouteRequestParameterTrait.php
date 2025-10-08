<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteRouteRequestParameter;

trait DeleteRouteRequestParameterTrait
{
    /**
     * @param DeleteRouteRequestParameterRequest $args
     * @return void
     */
    public function deleteRouteRequestParameter(DeleteRouteRequestParameterRequest $args)
    {
        parent::deleteRouteRequestParameter($args->toArray());
    }
}
