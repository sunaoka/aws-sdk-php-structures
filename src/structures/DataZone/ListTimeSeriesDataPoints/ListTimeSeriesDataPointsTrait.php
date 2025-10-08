<?php

namespace Sunaoka\Aws\Structures\DataZone\ListTimeSeriesDataPoints;

trait ListTimeSeriesDataPointsTrait
{
    /**
     * @param ListTimeSeriesDataPointsRequest $args
     * @return ListTimeSeriesDataPointsResponse
     */
    public function listTimeSeriesDataPoints(ListTimeSeriesDataPointsRequest $args)
    {
        $result = parent::listTimeSeriesDataPoints($args->toArray());
        return new ListTimeSeriesDataPointsResponse($result->toArray());
    }
}
