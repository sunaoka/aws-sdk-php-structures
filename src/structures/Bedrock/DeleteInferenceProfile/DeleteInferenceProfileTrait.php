<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteInferenceProfile;

trait DeleteInferenceProfileTrait
{
    /**
     * @param DeleteInferenceProfileRequest $args
     * @return DeleteInferenceProfileResponse
     */
    public function deleteInferenceProfile(DeleteInferenceProfileRequest $args)
    {
        $result = parent::deleteInferenceProfile($args->toArray());
        return new DeleteInferenceProfileResponse($result->toArray());
    }
}
