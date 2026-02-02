<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateCollaborationChangeRequest;

trait UpdateCollaborationChangeRequestTrait
{
    /**
     * @param UpdateCollaborationChangeRequestRequest $args
     * @return UpdateCollaborationChangeRequestResponse
     */
    public function updateCollaborationChangeRequest(UpdateCollaborationChangeRequestRequest $args)
    {
        $result = parent::updateCollaborationChangeRequest($args->toArray());
        return new UpdateCollaborationChangeRequestResponse($result->toArray());
    }
}
