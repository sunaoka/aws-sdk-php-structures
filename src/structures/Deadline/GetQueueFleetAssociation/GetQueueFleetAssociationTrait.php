<?php

namespace Sunaoka\Aws\Structures\Deadline\GetQueueFleetAssociation;

trait GetQueueFleetAssociationTrait
{
    /**
     * @param GetQueueFleetAssociationRequest $args
     * @return GetQueueFleetAssociationResponse
     */
    public function getQueueFleetAssociation(GetQueueFleetAssociationRequest $args)
    {
        $result = parent::getQueueFleetAssociation($args->toArray());
        return new GetQueueFleetAssociationResponse($result->toArray());
    }
}
