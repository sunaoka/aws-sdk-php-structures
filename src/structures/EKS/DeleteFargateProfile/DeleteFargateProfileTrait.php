<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteFargateProfile;

trait DeleteFargateProfileTrait
{
    /**
     * @param DeleteFargateProfileRequest $args
     * @return DeleteFargateProfileResponse
     */
    public function deleteFargateProfile(DeleteFargateProfileRequest $args)
    {
        $result = parent::deleteFargateProfile($args->toArray());
        return new DeleteFargateProfileResponse($result->toArray());
    }
}
