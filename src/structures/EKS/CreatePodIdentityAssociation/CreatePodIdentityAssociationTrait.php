<?php

namespace Sunaoka\Aws\Structures\EKS\CreatePodIdentityAssociation;

trait CreatePodIdentityAssociationTrait
{
    /**
     * @param CreatePodIdentityAssociationRequest $args
     * @return CreatePodIdentityAssociationResponse
     */
    public function createPodIdentityAssociation(CreatePodIdentityAssociationRequest $args)
    {
        $result = parent::createPodIdentityAssociation($args->toArray());
        return new CreatePodIdentityAssociationResponse($result->toArray());
    }
}
