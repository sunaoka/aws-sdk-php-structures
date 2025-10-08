<?php

namespace Sunaoka\Aws\Structures\ivschat\GetLoggingConfiguration;

trait GetLoggingConfigurationTrait
{
    /**
     * @param GetLoggingConfigurationRequest $args
     * @return GetLoggingConfigurationResponse
     */
    public function getLoggingConfiguration(GetLoggingConfigurationRequest $args)
    {
        $result = parent::getLoggingConfiguration($args->toArray());
        return new GetLoggingConfigurationResponse($result->toArray());
    }
}
