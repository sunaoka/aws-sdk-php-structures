<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateIndexingConfiguration;

trait UpdateIndexingConfigurationTrait
{
    /**
     * @param UpdateIndexingConfigurationRequest $args
     * @return UpdateIndexingConfigurationResponse
     */
    public function updateIndexingConfiguration(UpdateIndexingConfigurationRequest $args)
    {
        $result = parent::updateIndexingConfiguration($args->toArray());
        return new UpdateIndexingConfigurationResponse($result->toArray());
    }
}
