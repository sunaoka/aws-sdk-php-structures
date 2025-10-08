<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateQueueLimitAssociation;

trait UpdateQueueLimitAssociationTrait
{
    /**
     * @param UpdateQueueLimitAssociationRequest $args
     * @return UpdateQueueLimitAssociationResponse
     */
    public function updateQueueLimitAssociation(UpdateQueueLimitAssociationRequest $args)
    {
        $result = parent::updateQueueLimitAssociation($args->toArray());
        return new UpdateQueueLimitAssociationResponse($result->toArray());
    }
}
