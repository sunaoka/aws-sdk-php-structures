<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateContainerAssociation;

trait UpdateContainerAssociationTrait
{
    /**
     * @param UpdateContainerAssociationRequest $args
     * @return UpdateContainerAssociationResponse
     */
    public function updateContainerAssociation(UpdateContainerAssociationRequest $args)
    {
        $result = parent::updateContainerAssociation($args->toArray());
        return new UpdateContainerAssociationResponse($result->toArray());
    }
}
