<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetCustomDomainAssociation;

trait GetCustomDomainAssociationTrait
{
    /**
     * @param GetCustomDomainAssociationRequest $args
     * @return GetCustomDomainAssociationResponse
     */
    public function getCustomDomainAssociation(GetCustomDomainAssociationRequest $args)
    {
        $result = parent::getCustomDomainAssociation($args->toArray());
        return new GetCustomDomainAssociationResponse($result->toArray());
    }
}
