<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppLaunchConfiguration;

trait GetAppLaunchConfigurationTrait
{
    /**
     * @param GetAppLaunchConfigurationRequest $args
     * @return GetAppLaunchConfigurationResponse
     */
    public function getAppLaunchConfiguration(GetAppLaunchConfigurationRequest $args)
    {
        $result = parent::getAppLaunchConfiguration($args->toArray());
        return new GetAppLaunchConfigurationResponse($result->toArray());
    }
}
