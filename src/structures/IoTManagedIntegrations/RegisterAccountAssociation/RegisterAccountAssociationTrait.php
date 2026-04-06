<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\RegisterAccountAssociation;

trait RegisterAccountAssociationTrait
{
    /**
     * @param RegisterAccountAssociationRequest $args
     * @return RegisterAccountAssociationResponse
     */
    public function registerAccountAssociation(RegisterAccountAssociationRequest $args)
    {
        $result = parent::registerAccountAssociation($args->toArray());
        return new RegisterAccountAssociationResponse($result->toArray());
    }
}
