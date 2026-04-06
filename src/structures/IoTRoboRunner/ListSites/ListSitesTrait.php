<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\ListSites;

trait ListSitesTrait
{
    /**
     * @param ListSitesRequest $args
     * @return ListSitesResponse
     */
    public function listSites(ListSitesRequest $args)
    {
        $result = parent::listSites($args->toArray());
        return new ListSitesResponse($result->toArray());
    }
}
