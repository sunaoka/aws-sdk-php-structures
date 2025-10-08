<?php

namespace Sunaoka\Aws\Structures\Ec2\GetRouteServerRoutingDatabase;

trait GetRouteServerRoutingDatabaseTrait
{
    /**
     * @param GetRouteServerRoutingDatabaseRequest $args
     * @return GetRouteServerRoutingDatabaseResponse
     */
    public function getRouteServerRoutingDatabase(GetRouteServerRoutingDatabaseRequest $args)
    {
        $result = parent::getRouteServerRoutingDatabase($args->toArray());
        return new GetRouteServerRoutingDatabaseResponse($result->toArray());
    }
}
