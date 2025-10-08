<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateQueueFleetAssociation;

trait CreateQueueFleetAssociationTrait
{
    /**
     * @param CreateQueueFleetAssociationRequest $args
     * @return CreateQueueFleetAssociationResponse
     */
    public function createQueueFleetAssociation(CreateQueueFleetAssociationRequest $args)
    {
        $result = parent::createQueueFleetAssociation($args->toArray());
        return new CreateQueueFleetAssociationResponse($result->toArray());
    }
}
