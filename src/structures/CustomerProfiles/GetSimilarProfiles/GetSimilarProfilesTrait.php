<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSimilarProfiles;

trait GetSimilarProfilesTrait
{
    /**
     * @param GetSimilarProfilesRequest $args
     * @return GetSimilarProfilesResponse
     */
    public function getSimilarProfiles(GetSimilarProfilesRequest $args)
    {
        $result = parent::getSimilarProfiles($args->toArray());
        return new GetSimilarProfilesResponse($result->toArray());
    }
}
