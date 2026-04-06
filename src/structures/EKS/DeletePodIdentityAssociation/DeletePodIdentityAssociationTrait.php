<?php

namespace Sunaoka\Aws\Structures\EKS\DeletePodIdentityAssociation;

trait DeletePodIdentityAssociationTrait
{
    /**
     * @param DeletePodIdentityAssociationRequest $args
     * @return DeletePodIdentityAssociationResponse
     */
    public function deletePodIdentityAssociation(DeletePodIdentityAssociationRequest $args)
    {
        $result = parent::deletePodIdentityAssociation($args->toArray());
        return new DeletePodIdentityAssociationResponse($result->toArray());
    }
}
