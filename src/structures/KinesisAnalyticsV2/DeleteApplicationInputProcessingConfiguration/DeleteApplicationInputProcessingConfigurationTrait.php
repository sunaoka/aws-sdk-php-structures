<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DeleteApplicationInputProcessingConfiguration;

trait DeleteApplicationInputProcessingConfigurationTrait
{
    /**
     * @param DeleteApplicationInputProcessingConfigurationRequest $args
     * @return DeleteApplicationInputProcessingConfigurationResponse
     */
    public function deleteApplicationInputProcessingConfiguration(DeleteApplicationInputProcessingConfigurationRequest $args)
    {
        $result = parent::deleteApplicationInputProcessingConfiguration($args->toArray());
        return new DeleteApplicationInputProcessingConfigurationResponse($result->toArray());
    }
}
