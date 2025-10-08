<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteSecurityProfile;

trait DeleteSecurityProfileTrait
{
    /**
     * @param DeleteSecurityProfileRequest $args
     * @return void
     */
    public function deleteSecurityProfile(DeleteSecurityProfileRequest $args)
    {
        parent::deleteSecurityProfile($args->toArray());
    }
}
