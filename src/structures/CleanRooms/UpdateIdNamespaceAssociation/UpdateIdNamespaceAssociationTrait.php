<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateIdNamespaceAssociation;

trait UpdateIdNamespaceAssociationTrait
{
    /**
     * @param UpdateIdNamespaceAssociationRequest $args
     * @return UpdateIdNamespaceAssociationResponse
     */
    public function updateIdNamespaceAssociation(UpdateIdNamespaceAssociationRequest $args)
    {
        $result = parent::updateIdNamespaceAssociation($args->toArray());
        return new UpdateIdNamespaceAssociationResponse($result->toArray());
    }
}
