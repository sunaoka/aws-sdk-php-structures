<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\ListInternetEvents;

trait ListInternetEventsTrait
{
    /**
     * @param ListInternetEventsRequest $args
     * @return ListInternetEventsResponse
     */
    public function listInternetEvents(ListInternetEventsRequest $args)
    {
        $result = parent::listInternetEvents($args->toArray());
        return new ListInternetEventsResponse($result->toArray());
    }
}
