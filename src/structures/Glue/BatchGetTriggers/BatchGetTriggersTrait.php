<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetTriggers;

trait BatchGetTriggersTrait
{
    /**
     * @param BatchGetTriggersRequest $args
     * @return BatchGetTriggersResponse
     */
    public function batchGetTriggers(BatchGetTriggersRequest $args)
    {
        $result = parent::batchGetTriggers($args->toArray());
        return new BatchGetTriggersResponse($result->toArray());
    }
}
