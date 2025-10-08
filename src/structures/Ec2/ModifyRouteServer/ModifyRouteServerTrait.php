<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyRouteServer;

trait ModifyRouteServerTrait
{
    /**
     * @param ModifyRouteServerRequest $args
     * @return ModifyRouteServerResponse
     */
    public function modifyRouteServer(ModifyRouteServerRequest $args)
    {
        $result = parent::modifyRouteServer($args->toArray());
        return new ModifyRouteServerResponse($result->toArray());
    }
}
