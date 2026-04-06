<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueueEnvironments;

trait ListQueueEnvironmentsTrait
{
    /**
     * @param ListQueueEnvironmentsRequest $args
     * @return ListQueueEnvironmentsResponse
     */
    public function listQueueEnvironments(ListQueueEnvironmentsRequest $args)
    {
        $result = parent::listQueueEnvironments($args->toArray());
        return new ListQueueEnvironmentsResponse($result->toArray());
    }
}
