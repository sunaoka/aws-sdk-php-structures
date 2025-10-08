<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyAuthenticationProfile;

trait ModifyAuthenticationProfileTrait
{
    /**
     * @param ModifyAuthenticationProfileRequest $args
     * @return ModifyAuthenticationProfileResponse
     */
    public function modifyAuthenticationProfile(ModifyAuthenticationProfileRequest $args)
    {
        $result = parent::modifyAuthenticationProfile($args->toArray());
        return new ModifyAuthenticationProfileResponse($result->toArray());
    }
}
