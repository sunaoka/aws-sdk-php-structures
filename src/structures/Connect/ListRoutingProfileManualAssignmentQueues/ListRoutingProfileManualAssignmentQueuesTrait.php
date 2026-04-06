<?php

namespace Sunaoka\Aws\Structures\Connect\ListRoutingProfileManualAssignmentQueues;

trait ListRoutingProfileManualAssignmentQueuesTrait
{
    /**
     * @param ListRoutingProfileManualAssignmentQueuesRequest $args
     * @return ListRoutingProfileManualAssignmentQueuesResponse
     */
    public function listRoutingProfileManualAssignmentQueues(ListRoutingProfileManualAssignmentQueuesRequest $args)
    {
        $result = parent::listRoutingProfileManualAssignmentQueues($args->toArray());
        return new ListRoutingProfileManualAssignmentQueuesResponse($result->toArray());
    }
}
