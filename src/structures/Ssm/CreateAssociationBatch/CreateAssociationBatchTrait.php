<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateAssociationBatch;

trait CreateAssociationBatchTrait
{
    /**
     * @param CreateAssociationBatchRequest $args
     * @return CreateAssociationBatchResponse
     */
    public function createAssociationBatch(CreateAssociationBatchRequest $args)
    {
        $result = parent::createAssociationBatch($args->toArray());
        return new CreateAssociationBatchResponse($result->toArray());
    }
}
