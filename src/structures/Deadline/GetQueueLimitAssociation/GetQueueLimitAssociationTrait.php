<?php

namespace Sunaoka\Aws\Structures\Deadline\GetQueueLimitAssociation;

trait GetQueueLimitAssociationTrait
{
    /**
     * @param GetQueueLimitAssociationRequest $args
     * @return GetQueueLimitAssociationResponse
     */
    public function getQueueLimitAssociation(GetQueueLimitAssociationRequest $args)
    {
        $result = parent::getQueueLimitAssociation($args->toArray());
        return new GetQueueLimitAssociationResponse($result->toArray());
    }
}
