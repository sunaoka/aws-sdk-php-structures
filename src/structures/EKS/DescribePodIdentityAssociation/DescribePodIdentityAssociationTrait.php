<?php

namespace Sunaoka\Aws\Structures\EKS\DescribePodIdentityAssociation;

trait DescribePodIdentityAssociationTrait
{
    /**
     * @param DescribePodIdentityAssociationRequest $args
     * @return DescribePodIdentityAssociationResponse
     */
    public function describePodIdentityAssociation(DescribePodIdentityAssociationRequest $args)
    {
        $result = parent::describePodIdentityAssociation($args->toArray());
        return new DescribePodIdentityAssociationResponse($result->toArray());
    }
}
