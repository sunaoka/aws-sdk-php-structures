<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationIdNamespaceAssociations;

trait ListCollaborationIdNamespaceAssociationsTrait
{
    /**
     * @param ListCollaborationIdNamespaceAssociationsRequest $args
     * @return ListCollaborationIdNamespaceAssociationsResponse
     */
    public function listCollaborationIdNamespaceAssociations(ListCollaborationIdNamespaceAssociationsRequest $args)
    {
        $result = parent::listCollaborationIdNamespaceAssociations($args->toArray());
        return new ListCollaborationIdNamespaceAssociationsResponse($result->toArray());
    }
}
