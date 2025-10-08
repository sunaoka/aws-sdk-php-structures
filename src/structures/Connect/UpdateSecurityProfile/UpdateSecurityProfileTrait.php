<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateSecurityProfile;

trait UpdateSecurityProfileTrait
{
    /**
     * @param UpdateSecurityProfileRequest $args
     * @return void
     */
    public function updateSecurityProfile(UpdateSecurityProfileRequest $args)
    {
        parent::updateSecurityProfile($args->toArray());
    }
}
