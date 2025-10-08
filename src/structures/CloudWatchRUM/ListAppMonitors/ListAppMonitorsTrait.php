<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\ListAppMonitors;

trait ListAppMonitorsTrait
{
    /**
     * @param ListAppMonitorsRequest $args
     * @return ListAppMonitorsResponse
     */
    public function listAppMonitors(ListAppMonitorsRequest $args)
    {
        $result = parent::listAppMonitors($args->toArray());
        return new ListAppMonitorsResponse($result->toArray());
    }
}
