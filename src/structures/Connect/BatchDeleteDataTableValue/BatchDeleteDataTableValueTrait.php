<?php

namespace Sunaoka\Aws\Structures\Connect\BatchDeleteDataTableValue;

trait BatchDeleteDataTableValueTrait
{
    /**
     * @param BatchDeleteDataTableValueRequest $args
     * @return BatchDeleteDataTableValueResponse
     */
    public function batchDeleteDataTableValue(BatchDeleteDataTableValueRequest $args)
    {
        $result = parent::batchDeleteDataTableValue($args->toArray());
        return new BatchDeleteDataTableValueResponse($result->toArray());
    }
}
