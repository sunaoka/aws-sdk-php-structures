<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIdNamespaceAssociation;

trait CreateIdNamespaceAssociationTrait
{
    /**
     * @param CreateIdNamespaceAssociationRequest $args
     * @return CreateIdNamespaceAssociationResponse
     */
    public function createIdNamespaceAssociation(CreateIdNamespaceAssociationRequest $args)
    {
        $result = parent::createIdNamespaceAssociation($args->toArray());
        return new CreateIdNamespaceAssociationResponse($result->toArray());
    }
}
