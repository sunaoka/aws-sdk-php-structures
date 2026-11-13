<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateSubdomainAssociation;

trait UpdateSubdomainAssociationTrait
{
    /**
     * @param UpdateSubdomainAssociationRequest $args
     * @return UpdateSubdomainAssociationResponse
     */
    public function updateSubdomainAssociation(UpdateSubdomainAssociationRequest $args)
    {
        $result = parent::updateSubdomainAssociation($args->toArray());
        return new UpdateSubdomainAssociationResponse($result->toArray());
    }
}
