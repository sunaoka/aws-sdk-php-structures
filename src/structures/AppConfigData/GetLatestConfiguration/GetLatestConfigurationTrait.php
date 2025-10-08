<?php

namespace Sunaoka\Aws\Structures\AppConfigData\GetLatestConfiguration;

trait GetLatestConfigurationTrait
{
    /**
     * @param GetLatestConfigurationRequest $args
     * @return GetLatestConfigurationResponse
     */
    public function getLatestConfiguration(GetLatestConfigurationRequest $args)
    {
        $result = parent::getLatestConfiguration($args->toArray());
        return new GetLatestConfigurationResponse($result->toArray());
    }
}
