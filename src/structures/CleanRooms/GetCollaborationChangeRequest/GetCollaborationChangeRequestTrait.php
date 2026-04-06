<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationChangeRequest;

trait GetCollaborationChangeRequestTrait
{
    /**
     * @param GetCollaborationChangeRequestRequest $args
     * @return GetCollaborationChangeRequestResponse
     */
    public function getCollaborationChangeRequest(GetCollaborationChangeRequestRequest $args)
    {
        $result = parent::getCollaborationChangeRequest($args->toArray());
        return new GetCollaborationChangeRequestResponse($result->toArray());
    }
}
