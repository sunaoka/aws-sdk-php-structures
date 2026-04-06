<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetIdNamespaceAssociation;

trait GetIdNamespaceAssociationTrait
{
    /**
     * @param GetIdNamespaceAssociationRequest $args
     * @return GetIdNamespaceAssociationResponse
     */
    public function getIdNamespaceAssociation(GetIdNamespaceAssociationRequest $args)
    {
        $result = parent::getIdNamespaceAssociation($args->toArray());
        return new GetIdNamespaceAssociationResponse($result->toArray());
    }
}
