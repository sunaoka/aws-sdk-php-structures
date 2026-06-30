<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateContainerAssociation;

trait CreateContainerAssociationTrait
{
    /**
     * @param CreateContainerAssociationRequest $args
     * @return CreateContainerAssociationResponse
     */
    public function createContainerAssociation(CreateContainerAssociationRequest $args)
    {
        $result = parent::createContainerAssociation($args->toArray());
        return new CreateContainerAssociationResponse($result->toArray());
    }
}
