<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListQueues;

trait ListQueuesTrait
{
    /**
     * @param ListQueuesRequest $args
     * @return ListQueuesResponse
     */
    public function listQueues(ListQueuesRequest $args)
    {
        $result = parent::listQueues($args->toArray());
        return new ListQueuesResponse($result->toArray());
    }
}
