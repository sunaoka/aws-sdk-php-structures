<?php

namespace Sunaoka\Aws\Structures\IVS\BatchGetStreamKey;

trait BatchGetStreamKeyTrait
{
    /**
     * @param BatchGetStreamKeyRequest $args
     * @return BatchGetStreamKeyResponse
     */
    public function batchGetStreamKey(BatchGetStreamKeyRequest $args)
    {
        $result = parent::batchGetStreamKey($args->toArray());
        return new BatchGetStreamKeyResponse($result->toArray());
    }
}
