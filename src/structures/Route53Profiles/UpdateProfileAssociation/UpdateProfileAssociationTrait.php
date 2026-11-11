<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\UpdateProfileAssociation;

trait UpdateProfileAssociationTrait
{
    /**
     * @param UpdateProfileAssociationRequest $args
     * @return UpdateProfileAssociationResponse
     */
    public function updateProfileAssociation(UpdateProfileAssociationRequest $args)
    {
        $result = parent::updateProfileAssociation($args->toArray());
        return new UpdateProfileAssociationResponse($result->toArray());
    }
}
