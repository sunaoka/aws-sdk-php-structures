<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelInvocationLoggingConfiguration;

trait GetModelInvocationLoggingConfigurationTrait
{
    /**
     * @param GetModelInvocationLoggingConfigurationRequest $args
     * @return GetModelInvocationLoggingConfigurationResponse
     */
    public function getModelInvocationLoggingConfiguration(GetModelInvocationLoggingConfigurationRequest $args)
    {
        $result = parent::getModelInvocationLoggingConfiguration($args->toArray());
        return new GetModelInvocationLoggingConfigurationResponse($result->toArray());
    }
}
