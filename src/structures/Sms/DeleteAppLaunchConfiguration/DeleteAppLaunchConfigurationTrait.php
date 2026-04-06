<?php

namespace Sunaoka\Aws\Structures\Sms\DeleteAppLaunchConfiguration;

trait DeleteAppLaunchConfigurationTrait
{
    /**
     * @param DeleteAppLaunchConfigurationRequest $args
     * @return DeleteAppLaunchConfigurationResponse
     */
    public function deleteAppLaunchConfiguration(DeleteAppLaunchConfigurationRequest $args)
    {
        $result = parent::deleteAppLaunchConfiguration($args->toArray());
        return new DeleteAppLaunchConfigurationResponse($result->toArray());
    }
}
