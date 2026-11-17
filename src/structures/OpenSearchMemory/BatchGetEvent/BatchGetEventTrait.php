<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\BatchGetEvent;

trait BatchGetEventTrait
{
    /**
     * @param BatchGetEventRequest $args
     * @return BatchGetEventResponse
     */
    public function batchGetEvent(BatchGetEventRequest $args)
    {
        $result = parent::batchGetEvent($args->toArray());
        return new BatchGetEventResponse($result->toArray());
    }
}
