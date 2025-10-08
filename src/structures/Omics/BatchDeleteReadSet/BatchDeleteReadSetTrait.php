<?php

namespace Sunaoka\Aws\Structures\Omics\BatchDeleteReadSet;

trait BatchDeleteReadSetTrait
{
    /**
     * @param BatchDeleteReadSetRequest $args
     * @return BatchDeleteReadSetResponse
     */
    public function batchDeleteReadSet(BatchDeleteReadSetRequest $args)
    {
        $result = parent::batchDeleteReadSet($args->toArray());
        return new BatchDeleteReadSetResponse($result->toArray());
    }
}
