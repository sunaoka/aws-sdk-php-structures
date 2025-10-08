<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\UpdateDataIntegrationAssociation;

trait UpdateDataIntegrationAssociationTrait
{
    /**
     * @param UpdateDataIntegrationAssociationRequest $args
     * @return UpdateDataIntegrationAssociationResponse
     */
    public function updateDataIntegrationAssociation(UpdateDataIntegrationAssociationRequest $args)
    {
        $result = parent::updateDataIntegrationAssociation($args->toArray());
        return new UpdateDataIntegrationAssociationResponse($result->toArray());
    }
}
