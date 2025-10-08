<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationConfiguredAudienceModelAssociation;

trait GetCollaborationConfiguredAudienceModelAssociationTrait
{
    /**
     * @param GetCollaborationConfiguredAudienceModelAssociationRequest $args
     * @return GetCollaborationConfiguredAudienceModelAssociationResponse
     */
    public function getCollaborationConfiguredAudienceModelAssociation(GetCollaborationConfiguredAudienceModelAssociationRequest $args)
    {
        $result = parent::getCollaborationConfiguredAudienceModelAssociation($args->toArray());
        return new GetCollaborationConfiguredAudienceModelAssociationResponse($result->toArray());
    }
}
