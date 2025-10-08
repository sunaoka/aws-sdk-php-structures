<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\DeleteCustomDomainAssociation;

trait DeleteCustomDomainAssociationTrait
{
    /**
     * @param DeleteCustomDomainAssociationRequest $args
     * @return DeleteCustomDomainAssociationResponse
     */
    public function deleteCustomDomainAssociation(DeleteCustomDomainAssociationRequest $args)
    {
        $result = parent::deleteCustomDomainAssociation($args->toArray());
        return new DeleteCustomDomainAssociationResponse($result->toArray());
    }
}
