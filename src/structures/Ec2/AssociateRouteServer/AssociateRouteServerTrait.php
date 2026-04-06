<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateRouteServer;

trait AssociateRouteServerTrait
{
    /**
     * @param AssociateRouteServerRequest $args
     * @return AssociateRouteServerResponse
     */
    public function associateRouteServer(AssociateRouteServerRequest $args)
    {
        $result = parent::associateRouteServer($args->toArray());
        return new AssociateRouteServerResponse($result->toArray());
    }
}
