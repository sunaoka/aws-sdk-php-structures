<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\UpdateDeliveryConfiguration;

trait UpdateDeliveryConfigurationTrait
{
    /**
     * @param UpdateDeliveryConfigurationRequest $args
     * @return UpdateDeliveryConfigurationResponse
     */
    public function updateDeliveryConfiguration(UpdateDeliveryConfigurationRequest $args)
    {
        $result = parent::updateDeliveryConfiguration($args->toArray());
        return new UpdateDeliveryConfigurationResponse($result->toArray());
    }
}
