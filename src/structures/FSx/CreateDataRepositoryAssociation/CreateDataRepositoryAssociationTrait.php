<?php

namespace Sunaoka\Aws\Structures\FSx\CreateDataRepositoryAssociation;

trait CreateDataRepositoryAssociationTrait
{
    /**
     * @param CreateDataRepositoryAssociationRequest $args
     * @return CreateDataRepositoryAssociationResponse
     */
    public function createDataRepositoryAssociation(CreateDataRepositoryAssociationRequest $args)
    {
        $result = parent::createDataRepositoryAssociation($args->toArray());
        return new CreateDataRepositoryAssociationResponse($result->toArray());
    }
}
