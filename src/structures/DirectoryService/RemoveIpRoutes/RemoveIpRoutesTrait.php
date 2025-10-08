<?php

namespace Sunaoka\Aws\Structures\DirectoryService\RemoveIpRoutes;

trait RemoveIpRoutesTrait
{
    /**
     * @param RemoveIpRoutesRequest $args
     * @return RemoveIpRoutesResponse
     */
    public function removeIpRoutes(RemoveIpRoutesRequest $args)
    {
        $result = parent::removeIpRoutes($args->toArray());
        return new RemoveIpRoutesResponse($result->toArray());
    }
}
