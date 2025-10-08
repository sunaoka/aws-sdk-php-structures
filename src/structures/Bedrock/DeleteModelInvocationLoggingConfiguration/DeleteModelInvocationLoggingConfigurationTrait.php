<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteModelInvocationLoggingConfiguration;

trait DeleteModelInvocationLoggingConfigurationTrait
{
    /**
     * @param DeleteModelInvocationLoggingConfigurationRequest $args
     * @return DeleteModelInvocationLoggingConfigurationResponse
     */
    public function deleteModelInvocationLoggingConfiguration(DeleteModelInvocationLoggingConfigurationRequest $args)
    {
        $result = parent::deleteModelInvocationLoggingConfiguration($args->toArray());
        return new DeleteModelInvocationLoggingConfigurationResponse($result->toArray());
    }
}
