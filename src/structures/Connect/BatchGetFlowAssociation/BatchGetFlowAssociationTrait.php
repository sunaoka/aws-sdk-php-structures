<?php

namespace Sunaoka\Aws\Structures\Connect\BatchGetFlowAssociation;

trait BatchGetFlowAssociationTrait
{
    /**
     * @param BatchGetFlowAssociationRequest $args
     * @return BatchGetFlowAssociationResponse
     */
    public function batchGetFlowAssociation(BatchGetFlowAssociationRequest $args)
    {
        $result = parent::batchGetFlowAssociation($args->toArray());
        return new BatchGetFlowAssociationResponse($result->toArray());
    }
}
