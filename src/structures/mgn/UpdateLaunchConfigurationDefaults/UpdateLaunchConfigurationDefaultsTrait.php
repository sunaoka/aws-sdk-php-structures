<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateLaunchConfigurationDefaults;

trait UpdateLaunchConfigurationDefaultsTrait
{
    /**
     * @param UpdateLaunchConfigurationDefaultsRequest $args
     * @return UpdateLaunchConfigurationDefaultsResponse
     */
    public function updateLaunchConfigurationDefaults(UpdateLaunchConfigurationDefaultsRequest $args)
    {
        $result = parent::updateLaunchConfigurationDefaults($args->toArray());
        return new UpdateLaunchConfigurationDefaultsResponse($result->toArray());
    }
}
