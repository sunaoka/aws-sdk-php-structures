<?php

namespace Sunaoka\Aws\Structures\SageMaker\AddAssociation;

trait AddAssociationTrait
{
    /**
     * @param AddAssociationRequest $args
     * @return AddAssociationResponse
     */
    public function addAssociation(AddAssociationRequest $args)
    {
        $result = parent::addAssociation($args->toArray());
        return new AddAssociationResponse($result->toArray());
    }
}
