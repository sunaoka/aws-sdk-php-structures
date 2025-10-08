<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchUserProfiles;

trait SearchUserProfilesTrait
{
    /**
     * @param SearchUserProfilesRequest $args
     * @return SearchUserProfilesResponse
     */
    public function searchUserProfiles(SearchUserProfilesRequest $args)
    {
        $result = parent::searchUserProfiles($args->toArray());
        return new SearchUserProfilesResponse($result->toArray());
    }
}
