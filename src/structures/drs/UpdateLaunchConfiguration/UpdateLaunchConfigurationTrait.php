<?php

namespace Sunaoka\Aws\Structures\drs\UpdateLaunchConfiguration;

trait UpdateLaunchConfigurationTrait
{
    /**
     * @param UpdateLaunchConfigurationRequest $args
     * @return UpdateLaunchConfigurationResponse
     */
    public function updateLaunchConfiguration(UpdateLaunchConfigurationRequest $args)
    {
        $result = parent::updateLaunchConfiguration($args->toArray());
        return new UpdateLaunchConfigurationResponse($result->toArray());
    }
}
