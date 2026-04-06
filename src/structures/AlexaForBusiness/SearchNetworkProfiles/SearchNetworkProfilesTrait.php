<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SearchNetworkProfiles;

trait SearchNetworkProfilesTrait
{
    /**
     * @param SearchNetworkProfilesRequest $args
     * @return SearchNetworkProfilesResponse
     */
    public function searchNetworkProfiles(SearchNetworkProfilesRequest $args)
    {
        $result = parent::searchNetworkProfiles($args->toArray());
        return new SearchNetworkProfilesResponse($result->toArray());
    }
}
