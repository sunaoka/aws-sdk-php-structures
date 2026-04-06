<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutModelInvocationLoggingConfiguration;

trait PutModelInvocationLoggingConfigurationTrait
{
    /**
     * @param PutModelInvocationLoggingConfigurationRequest $args
     * @return PutModelInvocationLoggingConfigurationResponse
     */
    public function putModelInvocationLoggingConfiguration(PutModelInvocationLoggingConfigurationRequest $args)
    {
        $result = parent::putModelInvocationLoggingConfiguration($args->toArray());
        return new PutModelInvocationLoggingConfigurationResponse($result->toArray());
    }
}
