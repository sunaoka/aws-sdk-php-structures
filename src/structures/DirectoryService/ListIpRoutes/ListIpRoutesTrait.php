<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListIpRoutes;

trait ListIpRoutesTrait
{
    /**
     * @param ListIpRoutesRequest $args
     * @return ListIpRoutesResponse
     */
    public function listIpRoutes(ListIpRoutesRequest $args)
    {
        $result = parent::listIpRoutes($args->toArray());
        return new ListIpRoutesResponse($result->toArray());
    }
}
