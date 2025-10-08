<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\UpdateProfileResourceAssociation;

trait UpdateProfileResourceAssociationTrait
{
    /**
     * @param UpdateProfileResourceAssociationRequest $args
     * @return UpdateProfileResourceAssociationResponse
     */
    public function updateProfileResourceAssociation(UpdateProfileResourceAssociationRequest $args)
    {
        $result = parent::updateProfileResourceAssociation($args->toArray());
        return new UpdateProfileResourceAssociationResponse($result->toArray());
    }
}
