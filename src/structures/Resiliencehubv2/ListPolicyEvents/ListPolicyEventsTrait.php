<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListPolicyEvents;

trait ListPolicyEventsTrait
{
    /**
     * @param ListPolicyEventsRequest $args
     * @return ListPolicyEventsResponse
     */
    public function listPolicyEvents(ListPolicyEventsRequest $args)
    {
        $result = parent::listPolicyEvents($args->toArray());
        return new ListPolicyEventsResponse($result->toArray());
    }
}
