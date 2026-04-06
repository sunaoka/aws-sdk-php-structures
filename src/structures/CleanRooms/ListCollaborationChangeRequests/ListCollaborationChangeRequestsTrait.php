<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationChangeRequests;

trait ListCollaborationChangeRequestsTrait
{
    /**
     * @param ListCollaborationChangeRequestsRequest $args
     * @return ListCollaborationChangeRequestsResponse
     */
    public function listCollaborationChangeRequests(ListCollaborationChangeRequestsRequest $args)
    {
        $result = parent::listCollaborationChangeRequests($args->toArray());
        return new ListCollaborationChangeRequestsResponse($result->toArray());
    }
}
