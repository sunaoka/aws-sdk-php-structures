<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateDomainNameAccessAssociation;

trait CreateDomainNameAccessAssociationTrait
{
    /**
     * @param CreateDomainNameAccessAssociationRequest $args
     * @return CreateDomainNameAccessAssociationResponse
     */
    public function createDomainNameAccessAssociation(CreateDomainNameAccessAssociationRequest $args)
    {
        $result = parent::createDomainNameAccessAssociation($args->toArray());
        return new CreateDomainNameAccessAssociationResponse($result->toArray());
    }
}
