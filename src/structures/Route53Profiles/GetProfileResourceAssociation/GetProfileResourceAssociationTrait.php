<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\GetProfileResourceAssociation;

trait GetProfileResourceAssociationTrait
{
    /**
     * @param GetProfileResourceAssociationRequest $args
     * @return GetProfileResourceAssociationResponse
     */
    public function getProfileResourceAssociation(GetProfileResourceAssociationRequest $args)
    {
        $result = parent::getProfileResourceAssociation($args->toArray());
        return new GetProfileResourceAssociationResponse($result->toArray());
    }
}
