<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\GetConfiguration;

trait GetConfigurationTrait
{
    /**
     * @param GetConfigurationRequest $args
     * @return GetConfigurationResponse
     */
    public function getConfiguration(GetConfigurationRequest $args)
    {
        $result = parent::getConfiguration($args->toArray());
        return new GetConfigurationResponse($result->toArray());
    }
}
