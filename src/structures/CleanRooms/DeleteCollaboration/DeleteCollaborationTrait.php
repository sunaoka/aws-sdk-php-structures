<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteCollaboration;

trait DeleteCollaborationTrait
{
    /**
     * @param DeleteCollaborationRequest $args
     * @return DeleteCollaborationResponse
     */
    public function deleteCollaboration(DeleteCollaborationRequest $args)
    {
        $result = parent::deleteCollaboration($args->toArray());
        return new DeleteCollaborationResponse($result->toArray());
    }
}
