<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetThreats;

trait BatchGetThreatsTrait
{
    /**
     * @param BatchGetThreatsRequest $args
     * @return BatchGetThreatsResponse
     */
    public function batchGetThreats(BatchGetThreatsRequest $args)
    {
        $result = parent::batchGetThreats($args->toArray());
        return new BatchGetThreatsResponse($result->toArray());
    }
}
