<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\GetProfileAssociation;

trait GetProfileAssociationTrait
{
    /**
     * @param GetProfileAssociationRequest $args
     * @return GetProfileAssociationResponse
     */
    public function getProfileAssociation(GetProfileAssociationRequest $args)
    {
        $result = parent::getProfileAssociation($args->toArray());
        return new GetProfileAssociationResponse($result->toArray());
    }
}
