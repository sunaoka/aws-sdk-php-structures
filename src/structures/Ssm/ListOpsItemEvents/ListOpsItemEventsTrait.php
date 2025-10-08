<?php

namespace Sunaoka\Aws\Structures\Ssm\ListOpsItemEvents;

trait ListOpsItemEventsTrait
{
    /**
     * @param ListOpsItemEventsRequest $args
     * @return ListOpsItemEventsResponse
     */
    public function listOpsItemEvents(ListOpsItemEventsRequest $args)
    {
        $result = parent::listOpsItemEvents($args->toArray());
        return new ListOpsItemEventsResponse($result->toArray());
    }
}
