<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationConfiguredAudienceModelAssociations;

trait ListCollaborationConfiguredAudienceModelAssociationsTrait
{
    /**
     * @param ListCollaborationConfiguredAudienceModelAssociationsRequest $args
     * @return ListCollaborationConfiguredAudienceModelAssociationsResponse
     */
    public function listCollaborationConfiguredAudienceModelAssociations(ListCollaborationConfiguredAudienceModelAssociationsRequest $args)
    {
        $result = parent::listCollaborationConfiguredAudienceModelAssociations($args->toArray());
        return new ListCollaborationConfiguredAudienceModelAssociationsResponse($result->toArray());
    }
}
