<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateAuthenticationProfile;

trait UpdateAuthenticationProfileTrait
{
    /**
     * @param UpdateAuthenticationProfileRequest $args
     * @return void
     */
    public function updateAuthenticationProfile(UpdateAuthenticationProfileRequest $args)
    {
        parent::updateAuthenticationProfile($args->toArray());
    }
}
