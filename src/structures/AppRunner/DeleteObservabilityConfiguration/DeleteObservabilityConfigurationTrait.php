<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteObservabilityConfiguration;

trait DeleteObservabilityConfigurationTrait
{
    /**
     * @param DeleteObservabilityConfigurationRequest $args
     * @return DeleteObservabilityConfigurationResponse
     */
    public function deleteObservabilityConfiguration(DeleteObservabilityConfigurationRequest $args)
    {
        $result = parent::deleteObservabilityConfiguration($args->toArray());
        return new DeleteObservabilityConfigurationResponse($result->toArray());
    }
}
