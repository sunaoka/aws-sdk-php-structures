<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteRoute;

trait DeleteRouteTrait
{
    /**
     * @param DeleteRouteRequest $args
     * @return DeleteRouteResponse
     */
    public function deleteRoute(DeleteRouteRequest $args)
    {
        $result = parent::deleteRoute($args->toArray());
        return new DeleteRouteResponse($result->toArray());
    }
}
