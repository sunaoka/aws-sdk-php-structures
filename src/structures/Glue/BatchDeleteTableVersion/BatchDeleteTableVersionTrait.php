<?php

namespace Sunaoka\Aws\Structures\Glue\BatchDeleteTableVersion;

trait BatchDeleteTableVersionTrait
{
    /**
     * @param BatchDeleteTableVersionRequest $args
     * @return BatchDeleteTableVersionResponse
     */
    public function batchDeleteTableVersion(BatchDeleteTableVersionRequest $args)
    {
        $result = parent::batchDeleteTableVersion($args->toArray());
        return new BatchDeleteTableVersionResponse($result->toArray());
    }
}
