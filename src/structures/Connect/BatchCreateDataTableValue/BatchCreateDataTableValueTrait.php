<?php

namespace Sunaoka\Aws\Structures\Connect\BatchCreateDataTableValue;

trait BatchCreateDataTableValueTrait
{
    /**
     * @param BatchCreateDataTableValueRequest $args
     * @return BatchCreateDataTableValueResponse
     */
    public function batchCreateDataTableValue(BatchCreateDataTableValueRequest $args)
    {
        $result = parent::batchCreateDataTableValue($args->toArray());
        return new BatchCreateDataTableValueResponse($result->toArray());
    }
}
