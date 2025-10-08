<?php

namespace Sunaoka\Aws\Structures\EKS\UpdatePodIdentityAssociation;

trait UpdatePodIdentityAssociationTrait
{
    /**
     * @param UpdatePodIdentityAssociationRequest $args
     * @return UpdatePodIdentityAssociationResponse
     */
    public function updatePodIdentityAssociation(UpdatePodIdentityAssociationRequest $args)
    {
        $result = parent::updatePodIdentityAssociation($args->toArray());
        return new UpdatePodIdentityAssociationResponse($result->toArray());
    }
}
