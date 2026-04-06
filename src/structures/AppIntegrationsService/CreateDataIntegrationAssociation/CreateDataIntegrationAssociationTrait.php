<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateDataIntegrationAssociation;

trait CreateDataIntegrationAssociationTrait
{
    /**
     * @param CreateDataIntegrationAssociationRequest $args
     * @return CreateDataIntegrationAssociationResponse
     */
    public function createDataIntegrationAssociation(CreateDataIntegrationAssociationRequest $args)
    {
        $result = parent::createDataIntegrationAssociation($args->toArray());
        return new CreateDataIntegrationAssociationResponse($result->toArray());
    }
}
