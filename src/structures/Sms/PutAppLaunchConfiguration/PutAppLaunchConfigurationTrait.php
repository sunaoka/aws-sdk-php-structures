<?php

namespace Sunaoka\Aws\Structures\Sms\PutAppLaunchConfiguration;

trait PutAppLaunchConfigurationTrait
{
    /**
     * @param PutAppLaunchConfigurationRequest $args
     * @return PutAppLaunchConfigurationResponse
     */
    public function putAppLaunchConfiguration(PutAppLaunchConfigurationRequest $args)
    {
        $result = parent::putAppLaunchConfiguration($args->toArray());
        return new PutAppLaunchConfigurationResponse($result->toArray());
    }
}
