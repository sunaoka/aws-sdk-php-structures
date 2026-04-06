<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListAlerts;

trait ListAlertsTrait
{
    /**
     * @param ListAlertsRequest $args
     * @return ListAlertsResponse
     */
    public function listAlerts(ListAlertsRequest $args)
    {
        $result = parent::listAlerts($args->toArray());
        return new ListAlertsResponse($result->toArray());
    }
}
