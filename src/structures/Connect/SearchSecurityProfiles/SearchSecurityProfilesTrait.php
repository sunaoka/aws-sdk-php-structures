<?php

namespace Sunaoka\Aws\Structures\Connect\SearchSecurityProfiles;

trait SearchSecurityProfilesTrait
{
    /**
     * @param SearchSecurityProfilesRequest $args
     * @return SearchSecurityProfilesResponse
     */
    public function searchSecurityProfiles(SearchSecurityProfilesRequest $args)
    {
        $result = parent::searchSecurityProfiles($args->toArray());
        return new SearchSecurityProfilesResponse($result->toArray());
    }
}
