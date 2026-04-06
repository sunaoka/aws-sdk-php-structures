<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListMultiplexAlerts;

trait ListMultiplexAlertsTrait
{
    /**
     * @param ListMultiplexAlertsRequest $args
     * @return ListMultiplexAlertsResponse
     */
    public function listMultiplexAlerts(ListMultiplexAlertsRequest $args)
    {
        $result = parent::listMultiplexAlerts($args->toArray());
        return new ListMultiplexAlertsResponse($result->toArray());
    }
}
