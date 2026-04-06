<?php

namespace Sunaoka\Aws\Structures\EKS\ListPodIdentityAssociations;

trait ListPodIdentityAssociationsTrait
{
    /**
     * @param ListPodIdentityAssociationsRequest $args
     * @return ListPodIdentityAssociationsResponse
     */
    public function listPodIdentityAssociations(ListPodIdentityAssociationsRequest $args)
    {
        $result = parent::listPodIdentityAssociations($args->toArray());
        return new ListPodIdentityAssociationsResponse($result->toArray());
    }
}
