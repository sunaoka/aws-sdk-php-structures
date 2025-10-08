<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateCollaboration;

trait UpdateCollaborationTrait
{
    /**
     * @param UpdateCollaborationRequest $args
     * @return UpdateCollaborationResponse
     */
    public function updateCollaboration(UpdateCollaborationRequest $args)
    {
        $result = parent::updateCollaboration($args->toArray());
        return new UpdateCollaborationResponse($result->toArray());
    }
}
