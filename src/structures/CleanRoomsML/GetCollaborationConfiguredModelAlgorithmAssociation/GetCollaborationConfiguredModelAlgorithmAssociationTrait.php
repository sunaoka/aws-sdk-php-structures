<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationConfiguredModelAlgorithmAssociation;

trait GetCollaborationConfiguredModelAlgorithmAssociationTrait
{
    /**
     * @param GetCollaborationConfiguredModelAlgorithmAssociationRequest $args
     * @return GetCollaborationConfiguredModelAlgorithmAssociationResponse
     */
    public function getCollaborationConfiguredModelAlgorithmAssociation(GetCollaborationConfiguredModelAlgorithmAssociationRequest $args)
    {
        $result = parent::getCollaborationConfiguredModelAlgorithmAssociation($args->toArray());
        return new GetCollaborationConfiguredModelAlgorithmAssociationResponse($result->toArray());
    }
}
