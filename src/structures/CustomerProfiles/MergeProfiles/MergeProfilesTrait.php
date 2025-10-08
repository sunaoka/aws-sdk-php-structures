<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\MergeProfiles;

trait MergeProfilesTrait
{
    /**
     * @param MergeProfilesRequest $args
     * @return MergeProfilesResponse
     */
    public function mergeProfiles(MergeProfilesRequest $args)
    {
        $result = parent::mergeProfiles($args->toArray());
        return new MergeProfilesResponse($result->toArray());
    }
}
