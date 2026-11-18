<?php

namespace Sunaoka\Aws\Structures\mgn\GetLaunchConfigurationDefaults;

trait GetLaunchConfigurationDefaultsTrait
{
    /**
     * @param GetLaunchConfigurationDefaultsRequest $args
     * @return GetLaunchConfigurationDefaultsResponse
     */
    public function getLaunchConfigurationDefaults(GetLaunchConfigurationDefaultsRequest $args)
    {
        $result = parent::getLaunchConfigurationDefaults($args->toArray());
        return new GetLaunchConfigurationDefaultsResponse($result->toArray());
    }
}
