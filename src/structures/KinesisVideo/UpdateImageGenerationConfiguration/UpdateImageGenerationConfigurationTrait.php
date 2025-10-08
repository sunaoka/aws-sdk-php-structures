<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateImageGenerationConfiguration;

trait UpdateImageGenerationConfigurationTrait
{
    /**
     * @param UpdateImageGenerationConfigurationRequest $args
     * @return UpdateImageGenerationConfigurationResponse
     */
    public function updateImageGenerationConfiguration(UpdateImageGenerationConfigurationRequest $args)
    {
        $result = parent::updateImageGenerationConfiguration($args->toArray());
        return new UpdateImageGenerationConfigurationResponse($result->toArray());
    }
}
