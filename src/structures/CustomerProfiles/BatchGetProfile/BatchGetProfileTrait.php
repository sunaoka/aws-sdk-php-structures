<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\BatchGetProfile;

trait BatchGetProfileTrait
{
    /**
     * @param BatchGetProfileRequest $args
     * @return BatchGetProfileResponse
     */
    public function batchGetProfile(BatchGetProfileRequest $args)
    {
        $result = parent::batchGetProfile($args->toArray());
        return new BatchGetProfileResponse($result->toArray());
    }
}
