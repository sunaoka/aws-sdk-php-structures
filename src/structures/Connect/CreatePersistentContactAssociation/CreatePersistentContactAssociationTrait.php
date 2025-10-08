<?php

namespace Sunaoka\Aws\Structures\Connect\CreatePersistentContactAssociation;

trait CreatePersistentContactAssociationTrait
{
    /**
     * @param CreatePersistentContactAssociationRequest $args
     * @return CreatePersistentContactAssociationResponse
     */
    public function createPersistentContactAssociation(CreatePersistentContactAssociationRequest $args)
    {
        $result = parent::createPersistentContactAssociation($args->toArray());
        return new CreatePersistentContactAssociationResponse($result->toArray());
    }
}
