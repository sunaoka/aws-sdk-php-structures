<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead;

trait BatchReadTrait
{
    /**
     * @param BatchReadRequest $args
     * @return BatchReadResponse
     */
    public function batchRead(BatchReadRequest $args)
    {
        $result = parent::batchRead($args->toArray());
        return new BatchReadResponse($result->toArray());
    }
}
