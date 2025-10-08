<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateDataRepositoryAssociation;

trait UpdateDataRepositoryAssociationTrait
{
    /**
     * @param UpdateDataRepositoryAssociationRequest $args
     * @return UpdateDataRepositoryAssociationResponse
     */
    public function updateDataRepositoryAssociation(UpdateDataRepositoryAssociationRequest $args)
    {
        $result = parent::updateDataRepositoryAssociation($args->toArray());
        return new UpdateDataRepositoryAssociationResponse($result->toArray());
    }
}
