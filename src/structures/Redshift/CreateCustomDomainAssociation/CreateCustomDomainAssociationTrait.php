<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateCustomDomainAssociation;

trait CreateCustomDomainAssociationTrait
{
    /**
     * @param CreateCustomDomainAssociationRequest $args
     * @return CreateCustomDomainAssociationResponse
     */
    public function createCustomDomainAssociation(CreateCustomDomainAssociationRequest $args)
    {
        $result = parent::createCustomDomainAssociation($args->toArray());
        return new CreateCustomDomainAssociationResponse($result->toArray());
    }
}
