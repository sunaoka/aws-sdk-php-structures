<?php

namespace Sunaoka\Aws\Structures\DirectoryService\AddIpRoutes;

trait AddIpRoutesTrait
{
    /**
     * @param AddIpRoutesRequest $args
     * @return AddIpRoutesResponse
     */
    public function addIpRoutes(AddIpRoutesRequest $args)
    {
        $result = parent::addIpRoutes($args->toArray());
        return new AddIpRoutesResponse($result->toArray());
    }
}
