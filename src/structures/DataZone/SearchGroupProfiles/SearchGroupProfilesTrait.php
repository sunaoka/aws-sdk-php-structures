<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchGroupProfiles;

trait SearchGroupProfilesTrait
{
    /**
     * @param SearchGroupProfilesRequest $args
     * @return SearchGroupProfilesResponse
     */
    public function searchGroupProfiles(SearchGroupProfilesRequest $args)
    {
        $result = parent::searchGroupProfiles($args->toArray());
        return new SearchGroupProfilesResponse($result->toArray());
    }
}
