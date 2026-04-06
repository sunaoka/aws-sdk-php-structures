<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SearchProfiles;

trait SearchProfilesTrait
{
    /**
     * @param SearchProfilesRequest $args
     * @return SearchProfilesResponse
     */
    public function searchProfiles(SearchProfilesRequest $args)
    {
        $result = parent::searchProfiles($args->toArray());
        return new SearchProfilesResponse($result->toArray());
    }
}
