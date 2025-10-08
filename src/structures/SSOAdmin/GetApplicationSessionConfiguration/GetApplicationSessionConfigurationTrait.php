<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\GetApplicationSessionConfiguration;

trait GetApplicationSessionConfigurationTrait
{
    /**
     * @param GetApplicationSessionConfigurationRequest $args
     * @return GetApplicationSessionConfigurationResponse
     */
    public function getApplicationSessionConfiguration(GetApplicationSessionConfigurationRequest $args)
    {
        $result = parent::getApplicationSessionConfiguration($args->toArray());
        return new GetApplicationSessionConfigurationResponse($result->toArray());
    }
}
