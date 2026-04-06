<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListDeviceEvents;

trait ListDeviceEventsTrait
{
    /**
     * @param ListDeviceEventsRequest $args
     * @return ListDeviceEventsResponse
     */
    public function listDeviceEvents(ListDeviceEventsRequest $args)
    {
        $result = parent::listDeviceEvents($args->toArray());
        return new ListDeviceEventsResponse($result->toArray());
    }
}
