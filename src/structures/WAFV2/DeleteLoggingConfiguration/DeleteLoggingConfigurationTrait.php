<?php

namespace Sunaoka\Aws\Structures\WAFV2\DeleteLoggingConfiguration;

trait DeleteLoggingConfigurationTrait
{
    /**
     * @param DeleteLoggingConfigurationRequest $args
     * @return DeleteLoggingConfigurationResponse
     */
    public function deleteLoggingConfiguration(DeleteLoggingConfigurationRequest $args)
    {
        $result = parent::deleteLoggingConfiguration($args->toArray());
        return new DeleteLoggingConfigurationResponse($result->toArray());
    }
}
