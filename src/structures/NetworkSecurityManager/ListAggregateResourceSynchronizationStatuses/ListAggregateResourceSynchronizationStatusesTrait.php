<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListAggregateResourceSynchronizationStatuses;

trait ListAggregateResourceSynchronizationStatusesTrait
{
    /**
     * @param ListAggregateResourceSynchronizationStatusesRequest $args
     * @return ListAggregateResourceSynchronizationStatusesResponse
     */
    public function listAggregateResourceSynchronizationStatuses(ListAggregateResourceSynchronizationStatusesRequest $args)
    {
        $result = parent::listAggregateResourceSynchronizationStatuses($args->toArray());
        return new ListAggregateResourceSynchronizationStatusesResponse($result->toArray());
    }
}
