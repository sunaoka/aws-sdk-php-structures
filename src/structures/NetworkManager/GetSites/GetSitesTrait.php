<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetSites;

trait GetSitesTrait
{
    /**
     * @param GetSitesRequest $args
     * @return GetSitesResponse
     */
    public function getSites(GetSitesRequest $args)
    {
        $result = parent::getSites($args->toArray());
        return new GetSitesResponse($result->toArray());
    }
}
