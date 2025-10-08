<?php

namespace Sunaoka\Aws\Structures\Connect\ListRoutingProfileQueues;

trait ListRoutingProfileQueuesTrait
{
    /**
     * @param ListRoutingProfileQueuesRequest $args
     * @return ListRoutingProfileQueuesResponse
     */
    public function listRoutingProfileQueues(ListRoutingProfileQueuesRequest $args)
    {
        $result = parent::listRoutingProfileQueues($args->toArray());
        return new ListRoutingProfileQueuesResponse($result->toArray());
    }
}
