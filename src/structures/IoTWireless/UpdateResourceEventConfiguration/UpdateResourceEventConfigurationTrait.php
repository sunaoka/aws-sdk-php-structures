<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateResourceEventConfiguration;

trait UpdateResourceEventConfigurationTrait
{
    /**
     * @param UpdateResourceEventConfigurationRequest $args
     * @return UpdateResourceEventConfigurationResponse
     */
    public function updateResourceEventConfiguration(UpdateResourceEventConfigurationRequest $args)
    {
        $result = parent::updateResourceEventConfiguration($args->toArray());
        return new UpdateResourceEventConfigurationResponse($result->toArray());
    }
}
