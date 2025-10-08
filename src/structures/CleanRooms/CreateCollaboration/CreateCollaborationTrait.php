<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateCollaboration;

trait CreateCollaborationTrait
{
    /**
     * @param CreateCollaborationRequest $args
     * @return CreateCollaborationResponse
     */
    public function createCollaboration(CreateCollaborationRequest $args)
    {
        $result = parent::createCollaboration($args->toArray());
        return new CreateCollaborationResponse($result->toArray());
    }
}
