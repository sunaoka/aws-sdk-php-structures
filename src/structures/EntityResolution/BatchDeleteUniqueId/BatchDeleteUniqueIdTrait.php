<?php

namespace Sunaoka\Aws\Structures\EntityResolution\BatchDeleteUniqueId;

trait BatchDeleteUniqueIdTrait
{
    /**
     * @param BatchDeleteUniqueIdRequest $args
     * @return BatchDeleteUniqueIdResponse
     */
    public function batchDeleteUniqueId(BatchDeleteUniqueIdRequest $args)
    {
        $result = parent::batchDeleteUniqueId($args->toArray());
        return new BatchDeleteUniqueIdResponse($result->toArray());
    }
}
