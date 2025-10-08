<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteRouteServer;

trait DeleteRouteServerTrait
{
    /**
     * @param DeleteRouteServerRequest $args
     * @return DeleteRouteServerResponse
     */
    public function deleteRouteServer(DeleteRouteServerRequest $args)
    {
        $result = parent::deleteRouteServer($args->toArray());
        return new DeleteRouteServerResponse($result->toArray());
    }
}
