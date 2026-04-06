<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetAccountAssociation;

trait GetAccountAssociationTrait
{
    /**
     * @param GetAccountAssociationRequest $args
     * @return GetAccountAssociationResponse
     */
    public function getAccountAssociation(GetAccountAssociationRequest $args)
    {
        $result = parent::getAccountAssociation($args->toArray());
        return new GetAccountAssociationResponse($result->toArray());
    }
}
