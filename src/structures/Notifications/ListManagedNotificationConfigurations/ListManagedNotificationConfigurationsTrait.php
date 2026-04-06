<?php

namespace Sunaoka\Aws\Structures\Notifications\ListManagedNotificationConfigurations;

trait ListManagedNotificationConfigurationsTrait
{
    /**
     * @param ListManagedNotificationConfigurationsRequest $args
     * @return ListManagedNotificationConfigurationsResponse
     */
    public function listManagedNotificationConfigurations(ListManagedNotificationConfigurationsRequest $args)
    {
        $result = parent::listManagedNotificationConfigurations($args->toArray());
        return new ListManagedNotificationConfigurationsResponse($result->toArray());
    }
}
