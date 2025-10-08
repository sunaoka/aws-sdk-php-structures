<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetHostedConfigurationVersion;

trait GetHostedConfigurationVersionTrait
{
    /**
     * @param GetHostedConfigurationVersionRequest $args
     * @return GetHostedConfigurationVersionResponse
     */
    public function getHostedConfigurationVersion(GetHostedConfigurationVersionRequest $args)
    {
        $result = parent::getHostedConfigurationVersion($args->toArray());
        return new GetHostedConfigurationVersionResponse($result->toArray());
    }
}
