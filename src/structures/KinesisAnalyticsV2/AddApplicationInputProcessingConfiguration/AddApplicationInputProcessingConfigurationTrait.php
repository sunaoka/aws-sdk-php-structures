<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\AddApplicationInputProcessingConfiguration;

trait AddApplicationInputProcessingConfigurationTrait
{
    /**
     * @param AddApplicationInputProcessingConfigurationRequest $args
     * @return AddApplicationInputProcessingConfigurationResponse
     */
    public function addApplicationInputProcessingConfiguration(AddApplicationInputProcessingConfigurationRequest $args)
    {
        $result = parent::addApplicationInputProcessingConfiguration($args->toArray());
        return new AddApplicationInputProcessingConfigurationResponse($result->toArray());
    }
}
