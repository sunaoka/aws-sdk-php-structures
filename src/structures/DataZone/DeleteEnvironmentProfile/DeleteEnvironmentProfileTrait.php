<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteEnvironmentProfile;

trait DeleteEnvironmentProfileTrait
{
    /**
     * @param DeleteEnvironmentProfileRequest $args
     * @return void
     */
    public function deleteEnvironmentProfile(DeleteEnvironmentProfileRequest $args)
    {
        parent::deleteEnvironmentProfile($args->toArray());
    }
}
