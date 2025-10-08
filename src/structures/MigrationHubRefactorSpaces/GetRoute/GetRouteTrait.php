<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\GetRoute;

trait GetRouteTrait
{
    /**
     * @param GetRouteRequest $args
     * @return GetRouteResponse
     */
    public function getRoute(GetRouteRequest $args)
    {
        $result = parent::getRoute($args->toArray());
        return new GetRouteResponse($result->toArray());
    }
}
