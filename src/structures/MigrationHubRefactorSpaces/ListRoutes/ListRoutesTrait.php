<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListRoutes;

trait ListRoutesTrait
{
    /**
     * @param ListRoutesRequest $args
     * @return ListRoutesResponse
     */
    public function listRoutes(ListRoutesRequest $args)
    {
        $result = parent::listRoutes($args->toArray());
        return new ListRoutesResponse($result->toArray());
    }
}
