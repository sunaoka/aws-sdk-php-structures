<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteQueueLimitAssociation;

trait DeleteQueueLimitAssociationTrait
{
    /**
     * @param DeleteQueueLimitAssociationRequest $args
     * @return DeleteQueueLimitAssociationResponse
     */
    public function deleteQueueLimitAssociation(DeleteQueueLimitAssociationRequest $args)
    {
        $result = parent::deleteQueueLimitAssociation($args->toArray());
        return new DeleteQueueLimitAssociationResponse($result->toArray());
    }
}
