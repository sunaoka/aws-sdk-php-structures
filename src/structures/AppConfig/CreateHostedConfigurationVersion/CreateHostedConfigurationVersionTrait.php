<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateHostedConfigurationVersion;

trait CreateHostedConfigurationVersionTrait
{
    /**
     * @param CreateHostedConfigurationVersionRequest $args
     * @return CreateHostedConfigurationVersionResponse
     */
    public function createHostedConfigurationVersion(CreateHostedConfigurationVersionRequest $args)
    {
        $result = parent::createHostedConfigurationVersion($args->toArray());
        return new CreateHostedConfigurationVersionResponse($result->toArray());
    }
}
