<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborations;

trait ListCollaborationsTrait
{
    /**
     * @param ListCollaborationsRequest $args
     * @return ListCollaborationsResponse
     */
    public function listCollaborations(ListCollaborationsRequest $args)
    {
        $result = parent::listCollaborations($args->toArray());
        return new ListCollaborationsResponse($result->toArray());
    }
}
