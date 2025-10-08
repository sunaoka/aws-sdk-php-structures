<?php

namespace Sunaoka\Aws\Structures\Connect\SearchRoutingProfiles;

trait SearchRoutingProfilesTrait
{
    /**
     * @param SearchRoutingProfilesRequest $args
     * @return SearchRoutingProfilesResponse
     */
    public function searchRoutingProfiles(SearchRoutingProfilesRequest $args)
    {
        $result = parent::searchRoutingProfiles($args->toArray());
        return new SearchRoutingProfilesResponse($result->toArray());
    }
}
