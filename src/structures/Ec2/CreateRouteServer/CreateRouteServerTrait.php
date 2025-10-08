<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateRouteServer;

trait CreateRouteServerTrait
{
    /**
     * @param CreateRouteServerRequest $args
     * @return CreateRouteServerResponse
     */
    public function createRouteServer(CreateRouteServerRequest $args)
    {
        $result = parent::createRouteServer($args->toArray());
        return new CreateRouteServerResponse($result->toArray());
    }
}
