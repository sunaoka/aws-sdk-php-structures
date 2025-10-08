<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateTenantResourceAssociation;

trait CreateTenantResourceAssociationTrait
{
    /**
     * @param CreateTenantResourceAssociationRequest $args
     * @return CreateTenantResourceAssociationResponse
     */
    public function createTenantResourceAssociation(CreateTenantResourceAssociationRequest $args)
    {
        $result = parent::createTenantResourceAssociation($args->toArray());
        return new CreateTenantResourceAssociationResponse($result->toArray());
    }
}
