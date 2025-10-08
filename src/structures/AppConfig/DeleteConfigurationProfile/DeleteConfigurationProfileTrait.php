<?php

namespace Sunaoka\Aws\Structures\AppConfig\DeleteConfigurationProfile;

trait DeleteConfigurationProfileTrait
{
    /**
     * @param DeleteConfigurationProfileRequest $args
     * @return void
     */
    public function deleteConfigurationProfile(DeleteConfigurationProfileRequest $args)
    {
        parent::deleteConfigurationProfile($args->toArray());
    }
}
