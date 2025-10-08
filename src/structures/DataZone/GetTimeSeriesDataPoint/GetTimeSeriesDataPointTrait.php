<?php

namespace Sunaoka\Aws\Structures\DataZone\GetTimeSeriesDataPoint;

trait GetTimeSeriesDataPointTrait
{
    /**
     * @param GetTimeSeriesDataPointRequest $args
     * @return GetTimeSeriesDataPointResponse
     */
    public function getTimeSeriesDataPoint(GetTimeSeriesDataPointRequest $args)
    {
        $result = parent::getTimeSeriesDataPoint($args->toArray());
        return new GetTimeSeriesDataPointResponse($result->toArray());
    }
}
