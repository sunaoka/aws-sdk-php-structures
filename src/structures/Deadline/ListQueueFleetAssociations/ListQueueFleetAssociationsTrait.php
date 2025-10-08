<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueueFleetAssociations;

trait ListQueueFleetAssociationsTrait
{
    /**
     * @param ListQueueFleetAssociationsRequest $args
     * @return ListQueueFleetAssociationsResponse
     */
    public function listQueueFleetAssociations(ListQueueFleetAssociationsRequest $args)
    {
        $result = parent::listQueueFleetAssociations($args->toArray());
        return new ListQueueFleetAssociationsResponse($result->toArray());
    }
}
