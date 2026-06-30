<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteContainerAssociation;

trait DeleteContainerAssociationTrait
{
    /**
     * @param DeleteContainerAssociationRequest $args
     * @return DeleteContainerAssociationResponse
     */
    public function deleteContainerAssociation(DeleteContainerAssociationRequest $args)
    {
        $result = parent::deleteContainerAssociation($args->toArray());
        return new DeleteContainerAssociationResponse($result->toArray());
    }
}
