<?php

namespace Sunaoka\Aws\Structures\Amplify\CreateDomainAssociation;

trait CreateDomainAssociationTrait
{
    /**
     * @param CreateDomainAssociationRequest $args
     * @return CreateDomainAssociationResponse
     */
    public function createDomainAssociation(CreateDomainAssociationRequest $args)
    {
        $result = parent::createDomainAssociation($args->toArray());
        return new CreateDomainAssociationResponse($result->toArray());
    }
}
