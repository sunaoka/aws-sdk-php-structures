<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateExtensionAssociation;

trait CreateExtensionAssociationTrait
{
    /**
     * @param CreateExtensionAssociationRequest $args
     * @return CreateExtensionAssociationResponse
     */
    public function createExtensionAssociation(CreateExtensionAssociationRequest $args)
    {
        $result = parent::createExtensionAssociation($args->toArray());
        return new CreateExtensionAssociationResponse($result->toArray());
    }
}
