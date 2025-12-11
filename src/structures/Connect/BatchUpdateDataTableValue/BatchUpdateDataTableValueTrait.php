<?php

namespace Sunaoka\Aws\Structures\Connect\BatchUpdateDataTableValue;

trait BatchUpdateDataTableValueTrait
{
    /**
     * @param BatchUpdateDataTableValueRequest $args
     * @return BatchUpdateDataTableValueResponse
     */
    public function batchUpdateDataTableValue(BatchUpdateDataTableValueRequest $args)
    {
        $result = parent::batchUpdateDataTableValue($args->toArray());
        return new BatchUpdateDataTableValueResponse($result->toArray());
    }
}
