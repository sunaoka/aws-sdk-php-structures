<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteRoute;

trait DeleteRouteTrait
{
    /**
     * @param DeleteRouteRequest $args
     * @return void
     */
    public function deleteRoute(DeleteRouteRequest $args)
    {
        parent::deleteRoute($args->toArray());
    }
}
