<?php

namespace Sunaoka\Aws\Structures\Amplify\UpdateDomainAssociation;

trait UpdateDomainAssociationTrait
{
    /**
     * @param UpdateDomainAssociationRequest $args
     * @return UpdateDomainAssociationResponse
     */
    public function updateDomainAssociation(UpdateDomainAssociationRequest $args)
    {
        $result = parent::updateDomainAssociation($args->toArray());
        return new UpdateDomainAssociationResponse($result->toArray());
    }
}
