<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupTimeSeries;

trait ListAnomalyGroupTimeSeriesTrait
{
    /**
     * @param ListAnomalyGroupTimeSeriesRequest $args
     * @return ListAnomalyGroupTimeSeriesResponse
     */
    public function listAnomalyGroupTimeSeries(ListAnomalyGroupTimeSeriesRequest $args)
    {
        $result = parent::listAnomalyGroupTimeSeries($args->toArray());
        return new ListAnomalyGroupTimeSeriesResponse($result->toArray());
    }
}
