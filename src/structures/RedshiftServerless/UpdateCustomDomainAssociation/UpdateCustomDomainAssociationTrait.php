<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateCustomDomainAssociation;

trait UpdateCustomDomainAssociationTrait
{
    /**
     * @param UpdateCustomDomainAssociationRequest $args
     * @return UpdateCustomDomainAssociationResponse
     */
    public function updateCustomDomainAssociation(UpdateCustomDomainAssociationRequest $args)
    {
        $result = parent::updateCustomDomainAssociation($args->toArray());
        return new UpdateCustomDomainAssociationResponse($result->toArray());
    }
}
