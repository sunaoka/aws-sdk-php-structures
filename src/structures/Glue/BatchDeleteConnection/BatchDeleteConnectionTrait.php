<?php

namespace Sunaoka\Aws\Structures\Glue\BatchDeleteConnection;

trait BatchDeleteConnectionTrait
{
    /**
     * @param BatchDeleteConnectionRequest $args
     * @return BatchDeleteConnectionResponse
     */
    public function batchDeleteConnection(BatchDeleteConnectionRequest $args)
    {
        $result = parent::batchDeleteConnection($args->toArray());
        return new BatchDeleteConnectionResponse($result->toArray());
    }
}
