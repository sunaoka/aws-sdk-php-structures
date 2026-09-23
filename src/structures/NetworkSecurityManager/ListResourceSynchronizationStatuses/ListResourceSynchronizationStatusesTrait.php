<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListResourceSynchronizationStatuses;

trait ListResourceSynchronizationStatusesTrait
{
    /**
     * @param ListResourceSynchronizationStatusesRequest $args
     * @return ListResourceSynchronizationStatusesResponse
     */
    public function listResourceSynchronizationStatuses(ListResourceSynchronizationStatusesRequest $args)
    {
        $result = parent::listResourceSynchronizationStatuses($args->toArray());
        return new ListResourceSynchronizationStatusesResponse($result->toArray());
    }
}
