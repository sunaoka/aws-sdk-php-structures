<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusterEvents;

trait ListClusterEventsTrait
{
    /**
     * @param ListClusterEventsRequest $args
     * @return ListClusterEventsResponse
     */
    public function listClusterEvents(ListClusterEventsRequest $args)
    {
        $result = parent::listClusterEvents($args->toArray());
        return new ListClusterEventsResponse($result->toArray());
    }
}
