<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListNotificationConfigurations;

trait ListNotificationConfigurationsTrait
{
    /**
     * @param ListNotificationConfigurationsRequest $args
     * @return ListNotificationConfigurationsResponse
     */
    public function listNotificationConfigurations(ListNotificationConfigurationsRequest $args)
    {
        $result = parent::listNotificationConfigurations($args->toArray());
        return new ListNotificationConfigurationsResponse($result->toArray());
    }
}
