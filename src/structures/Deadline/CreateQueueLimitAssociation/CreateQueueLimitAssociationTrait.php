<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateQueueLimitAssociation;

trait CreateQueueLimitAssociationTrait
{
    /**
     * @param CreateQueueLimitAssociationRequest $args
     * @return CreateQueueLimitAssociationResponse
     */
    public function createQueueLimitAssociation(CreateQueueLimitAssociationRequest $args)
    {
        $result = parent::createQueueLimitAssociation($args->toArray());
        return new CreateQueueLimitAssociationResponse($result->toArray());
    }
}
