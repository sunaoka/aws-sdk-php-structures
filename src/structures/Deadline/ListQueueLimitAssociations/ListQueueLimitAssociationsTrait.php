<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueueLimitAssociations;

trait ListQueueLimitAssociationsTrait
{
    /**
     * @param ListQueueLimitAssociationsRequest $args
     * @return ListQueueLimitAssociationsResponse
     */
    public function listQueueLimitAssociations(ListQueueLimitAssociationsRequest $args)
    {
        $result = parent::listQueueLimitAssociations($args->toArray());
        return new ListQueueLimitAssociationsResponse($result->toArray());
    }
}
