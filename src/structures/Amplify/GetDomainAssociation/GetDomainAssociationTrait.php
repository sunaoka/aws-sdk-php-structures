<?php

namespace Sunaoka\Aws\Structures\Amplify\GetDomainAssociation;

trait GetDomainAssociationTrait
{
    /**
     * @param GetDomainAssociationRequest $args
     * @return GetDomainAssociationResponse
     */
    public function getDomainAssociation(GetDomainAssociationRequest $args)
    {
        $result = parent::getDomainAssociation($args->toArray());
        return new GetDomainAssociationResponse($result->toArray());
    }
}
