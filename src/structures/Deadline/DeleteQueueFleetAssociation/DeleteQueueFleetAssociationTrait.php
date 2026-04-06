<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteQueueFleetAssociation;

trait DeleteQueueFleetAssociationTrait
{
    /**
     * @param DeleteQueueFleetAssociationRequest $args
     * @return DeleteQueueFleetAssociationResponse
     */
    public function deleteQueueFleetAssociation(DeleteQueueFleetAssociationRequest $args)
    {
        $result = parent::deleteQueueFleetAssociation($args->toArray());
        return new DeleteQueueFleetAssociationResponse($result->toArray());
    }
}
