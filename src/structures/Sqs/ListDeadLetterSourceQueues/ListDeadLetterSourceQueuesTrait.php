<?php

namespace Sunaoka\Aws\Structures\Sqs\ListDeadLetterSourceQueues;

trait ListDeadLetterSourceQueuesTrait
{
    /**
     * @param ListDeadLetterSourceQueuesRequest $args
     * @return ListDeadLetterSourceQueuesResponse
     */
    public function listDeadLetterSourceQueues(ListDeadLetterSourceQueuesRequest $args)
    {
        $result = parent::listDeadLetterSourceQueues($args->toArray());
        return new ListDeadLetterSourceQueuesResponse($result->toArray());
    }
}
