<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListClusterAlerts;

trait ListClusterAlertsTrait
{
    /**
     * @param ListClusterAlertsRequest $args
     * @return ListClusterAlertsResponse
     */
    public function listClusterAlerts(ListClusterAlertsRequest $args)
    {
        $result = parent::listClusterAlerts($args->toArray());
        return new ListClusterAlertsResponse($result->toArray());
    }
}
