<?php

namespace Sunaoka\Aws\Structures\Athena\GetSystemTableConfiguration;

trait GetSystemTableConfigurationTrait
{
    /**
     * @param GetSystemTableConfigurationRequest $args
     * @return GetSystemTableConfigurationResponse
     */
    public function getSystemTableConfiguration(GetSystemTableConfigurationRequest $args)
    {
        $result = parent::getSystemTableConfiguration($args->toArray());
        return new GetSystemTableConfigurationResponse($result->toArray());
    }
}
