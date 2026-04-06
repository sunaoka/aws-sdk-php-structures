<?php

namespace Sunaoka\Aws\Structures\Notifications\ListManagedNotificationChannelAssociations;

trait ListManagedNotificationChannelAssociationsTrait
{
    /**
     * @param ListManagedNotificationChannelAssociationsRequest $args
     * @return ListManagedNotificationChannelAssociationsResponse
     */
    public function listManagedNotificationChannelAssociations(ListManagedNotificationChannelAssociationsRequest $args)
    {
        $result = parent::listManagedNotificationChannelAssociations($args->toArray());
        return new ListManagedNotificationChannelAssociationsResponse($result->toArray());
    }
}
