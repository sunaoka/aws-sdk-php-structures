<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroupingStatuses;

trait ListGroupingStatusesTrait
{
    /**
     * @param ListGroupingStatusesRequest $args
     * @return ListGroupingStatusesResponse
     */
    public function listGroupingStatuses(ListGroupingStatusesRequest $args)
    {
        $result = parent::listGroupingStatuses($args->toArray());
        return new ListGroupingStatusesResponse($result->toArray());
    }
}
