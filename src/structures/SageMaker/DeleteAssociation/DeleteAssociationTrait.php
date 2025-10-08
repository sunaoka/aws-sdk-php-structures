<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteAssociation;

trait DeleteAssociationTrait
{
    /**
     * @param DeleteAssociationRequest $args
     * @return DeleteAssociationResponse
     */
    public function deleteAssociation(DeleteAssociationRequest $args)
    {
        $result = parent::deleteAssociation($args->toArray());
        return new DeleteAssociationResponse($result->toArray());
    }
}
