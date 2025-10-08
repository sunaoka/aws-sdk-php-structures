<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteDataRepositoryAssociation;

trait DeleteDataRepositoryAssociationTrait
{
    /**
     * @param DeleteDataRepositoryAssociationRequest $args
     * @return DeleteDataRepositoryAssociationResponse
     */
    public function deleteDataRepositoryAssociation(DeleteDataRepositoryAssociationRequest $args)
    {
        $result = parent::deleteDataRepositoryAssociation($args->toArray());
        return new DeleteDataRepositoryAssociationResponse($result->toArray());
    }
}
