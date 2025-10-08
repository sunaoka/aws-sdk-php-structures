<?php

namespace Sunaoka\Aws\Structures\Amplify\DeleteDomainAssociation;

trait DeleteDomainAssociationTrait
{
    /**
     * @param DeleteDomainAssociationRequest $args
     * @return DeleteDomainAssociationResponse
     */
    public function deleteDomainAssociation(DeleteDomainAssociationRequest $args)
    {
        $result = parent::deleteDomainAssociation($args->toArray());
        return new DeleteDomainAssociationResponse($result->toArray());
    }
}
