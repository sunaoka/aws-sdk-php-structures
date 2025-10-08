<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteTenantResourceAssociation;

trait DeleteTenantResourceAssociationTrait
{
    /**
     * @param DeleteTenantResourceAssociationRequest $args
     * @return DeleteTenantResourceAssociationResponse
     */
    public function deleteTenantResourceAssociation(DeleteTenantResourceAssociationRequest $args)
    {
        $result = parent::deleteTenantResourceAssociation($args->toArray());
        return new DeleteTenantResourceAssociationResponse($result->toArray());
    }
}
