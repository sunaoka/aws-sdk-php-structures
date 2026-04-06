<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetInferenceProfile;

trait GetInferenceProfileTrait
{
    /**
     * @param GetInferenceProfileRequest $args
     * @return GetInferenceProfileResponse
     */
    public function getInferenceProfile(GetInferenceProfileRequest $args)
    {
        $result = parent::getInferenceProfile($args->toArray());
        return new GetInferenceProfileResponse($result->toArray());
    }
}
