<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaboration;

trait GetCollaborationTrait
{
    /**
     * @param GetCollaborationRequest $args
     * @return GetCollaborationResponse
     */
    public function getCollaboration(GetCollaborationRequest $args)
    {
        $result = parent::getCollaboration($args->toArray());
        return new GetCollaborationResponse($result->toArray());
    }
}
