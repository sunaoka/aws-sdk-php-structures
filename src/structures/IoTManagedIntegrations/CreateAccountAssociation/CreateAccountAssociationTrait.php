<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateAccountAssociation;

trait CreateAccountAssociationTrait
{
    /**
     * @param CreateAccountAssociationRequest $args
     * @return CreateAccountAssociationResponse
     */
    public function createAccountAssociation(CreateAccountAssociationRequest $args)
    {
        $result = parent::createAccountAssociation($args->toArray());
        return new CreateAccountAssociationResponse($result->toArray());
    }
}
