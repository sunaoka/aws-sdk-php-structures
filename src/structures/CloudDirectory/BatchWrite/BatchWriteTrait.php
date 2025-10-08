<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite;

trait BatchWriteTrait
{
    /**
     * @param BatchWriteRequest $args
     * @return BatchWriteResponse
     */
    public function batchWrite(BatchWriteRequest $args)
    {
        $result = parent::batchWrite($args->toArray());
        return new BatchWriteResponse($result->toArray());
    }
}
