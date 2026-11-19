<?php

namespace Sunaoka\Aws\Structures\Signin\BatchRevokeSessions;

trait BatchRevokeSessionsTrait
{
    /**
     * @param BatchRevokeSessionsRequest $args
     * @return BatchRevokeSessionsResponse
     */
    public function batchRevokeSessions(BatchRevokeSessionsRequest $args)
    {
        $result = parent::batchRevokeSessions($args->toArray());
        return new BatchRevokeSessionsResponse($result->toArray());
    }
}
