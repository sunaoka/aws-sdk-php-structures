<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\BatchGetCalculatedAttributeForProfile;

trait BatchGetCalculatedAttributeForProfileTrait
{
    /**
     * @param BatchGetCalculatedAttributeForProfileRequest $args
     * @return BatchGetCalculatedAttributeForProfileResponse
     */
    public function batchGetCalculatedAttributeForProfile(BatchGetCalculatedAttributeForProfileRequest $args)
    {
        $result = parent::batchGetCalculatedAttributeForProfile($args->toArray());
        return new BatchGetCalculatedAttributeForProfileResponse($result->toArray());
    }
}
