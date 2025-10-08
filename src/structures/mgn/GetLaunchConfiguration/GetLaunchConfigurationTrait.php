<?php

namespace Sunaoka\Aws\Structures\mgn\GetLaunchConfiguration;

trait GetLaunchConfigurationTrait
{
    /**
     * @param GetLaunchConfigurationRequest $args
     * @return GetLaunchConfigurationResponse
     */
    public function getLaunchConfiguration(GetLaunchConfigurationRequest $args)
    {
        $result = parent::getLaunchConfiguration($args->toArray());
        return new GetLaunchConfigurationResponse($result->toArray());
    }
}
