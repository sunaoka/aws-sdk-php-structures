<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetSession;

trait BatchGetSessionTrait
{
    /**
     * @param BatchGetSessionRequest $args
     * @return BatchGetSessionResponse
     */
    public function batchGetSession(BatchGetSessionRequest $args)
    {
        $result = parent::batchGetSession($args->toArray());
        return new BatchGetSessionResponse($result->toArray());
    }
}
