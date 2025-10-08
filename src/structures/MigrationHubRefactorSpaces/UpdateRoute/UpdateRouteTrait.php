<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\UpdateRoute;

trait UpdateRouteTrait
{
    /**
     * @param UpdateRouteRequest $args
     * @return UpdateRouteResponse
     */
    public function updateRoute(UpdateRouteRequest $args)
    {
        $result = parent::updateRoute($args->toArray());
        return new UpdateRouteResponse($result->toArray());
    }
}
