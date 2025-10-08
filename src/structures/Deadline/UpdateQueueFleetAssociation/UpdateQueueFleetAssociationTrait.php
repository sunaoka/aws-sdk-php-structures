<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateQueueFleetAssociation;

trait UpdateQueueFleetAssociationTrait
{
    /**
     * @param UpdateQueueFleetAssociationRequest $args
     * @return UpdateQueueFleetAssociationResponse
     */
    public function updateQueueFleetAssociation(UpdateQueueFleetAssociationRequest $args)
    {
        $result = parent::updateQueueFleetAssociation($args->toArray());
        return new UpdateQueueFleetAssociationResponse($result->toArray());
    }
}
