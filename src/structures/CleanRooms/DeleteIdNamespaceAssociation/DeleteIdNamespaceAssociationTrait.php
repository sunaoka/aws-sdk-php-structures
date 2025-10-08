<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteIdNamespaceAssociation;

trait DeleteIdNamespaceAssociationTrait
{
    /**
     * @param DeleteIdNamespaceAssociationRequest $args
     * @return DeleteIdNamespaceAssociationResponse
     */
    public function deleteIdNamespaceAssociation(DeleteIdNamespaceAssociationRequest $args)
    {
        $result = parent::deleteIdNamespaceAssociation($args->toArray());
        return new DeleteIdNamespaceAssociationResponse($result->toArray());
    }
}
