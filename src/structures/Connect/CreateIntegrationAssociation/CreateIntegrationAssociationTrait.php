<?php

namespace Sunaoka\Aws\Structures\Connect\CreateIntegrationAssociation;

trait CreateIntegrationAssociationTrait
{
    /**
     * @param CreateIntegrationAssociationRequest $args
     * @return CreateIntegrationAssociationResponse
     */
    public function createIntegrationAssociation(CreateIntegrationAssociationRequest $args)
    {
        $result = parent::createIntegrationAssociation($args->toArray());
        return new CreateIntegrationAssociationResponse($result->toArray());
    }
}
