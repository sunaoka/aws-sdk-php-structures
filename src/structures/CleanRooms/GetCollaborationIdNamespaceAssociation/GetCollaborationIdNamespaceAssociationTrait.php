<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationIdNamespaceAssociation;

trait GetCollaborationIdNamespaceAssociationTrait
{
    /**
     * @param GetCollaborationIdNamespaceAssociationRequest $args
     * @return GetCollaborationIdNamespaceAssociationResponse
     */
    public function getCollaborationIdNamespaceAssociation(GetCollaborationIdNamespaceAssociationRequest $args)
    {
        $result = parent::getCollaborationIdNamespaceAssociation($args->toArray());
        return new GetCollaborationIdNamespaceAssociationResponse($result->toArray());
    }
}
