<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetCustomEntityTypes;

trait BatchGetCustomEntityTypesTrait
{
    /**
     * @param BatchGetCustomEntityTypesRequest $args
     * @return BatchGetCustomEntityTypesResponse
     */
    public function batchGetCustomEntityTypes(BatchGetCustomEntityTypesRequest $args)
    {
        $result = parent::batchGetCustomEntityTypes($args->toArray());
        return new BatchGetCustomEntityTypesResponse($result->toArray());
    }
}
