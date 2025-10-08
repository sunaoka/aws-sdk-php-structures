<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateCollaborationChangeRequest;

trait CreateCollaborationChangeRequestTrait
{
    /**
     * @param CreateCollaborationChangeRequestRequest $args
     * @return CreateCollaborationChangeRequestResponse
     */
    public function createCollaborationChangeRequest(CreateCollaborationChangeRequestRequest $args)
    {
        $result = parent::createCollaborationChangeRequest($args->toArray());
        return new CreateCollaborationChangeRequestResponse($result->toArray());
    }
}
