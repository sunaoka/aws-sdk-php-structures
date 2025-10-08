<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateObservabilityConfiguration;

trait CreateObservabilityConfigurationTrait
{
    /**
     * @param CreateObservabilityConfigurationRequest $args
     * @return CreateObservabilityConfigurationResponse
     */
    public function createObservabilityConfiguration(CreateObservabilityConfigurationRequest $args)
    {
        $result = parent::createObservabilityConfiguration($args->toArray());
        return new CreateObservabilityConfigurationResponse($result->toArray());
    }
}
