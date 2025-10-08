<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListMonitors;

trait ListMonitorsTrait
{
    /**
     * @param ListMonitorsRequest $args
     * @return ListMonitorsResponse
     */
    public function listMonitors(ListMonitorsRequest $args)
    {
        $result = parent::listMonitors($args->toArray());
        return new ListMonitorsResponse($result->toArray());
    }
}
