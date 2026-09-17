<?php

namespace Sunaoka\Aws\Structures\Notifications\UpdateManagedNotificationChannelAssociation;

trait UpdateManagedNotificationChannelAssociationTrait
{
    /**
     * @param UpdateManagedNotificationChannelAssociationRequest $args
     * @return UpdateManagedNotificationChannelAssociationResponse
     */
    public function updateManagedNotificationChannelAssociation(UpdateManagedNotificationChannelAssociationRequest $args)
    {
        $result = parent::updateManagedNotificationChannelAssociation($args->toArray());
        return new UpdateManagedNotificationChannelAssociationResponse($result->toArray());
    }
}
