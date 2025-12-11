<?php

namespace Sunaoka\Aws\Structures\Connect\BatchDescribeDataTableValue;

trait BatchDescribeDataTableValueTrait
{
    /**
     * @param BatchDescribeDataTableValueRequest $args
     * @return BatchDescribeDataTableValueResponse
     */
    public function batchDescribeDataTableValue(BatchDescribeDataTableValueRequest $args)
    {
        $result = parent::batchDescribeDataTableValue($args->toArray());
        return new BatchDescribeDataTableValueResponse($result->toArray());
    }
}
