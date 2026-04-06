<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteTimeSeriesDataPoints;

trait DeleteTimeSeriesDataPointsTrait
{
    /**
     * @param DeleteTimeSeriesDataPointsRequest $args
     * @return DeleteTimeSeriesDataPointsResponse
     */
    public function deleteTimeSeriesDataPoints(DeleteTimeSeriesDataPointsRequest $args)
    {
        $result = parent::deleteTimeSeriesDataPoints($args->toArray());
        return new DeleteTimeSeriesDataPointsResponse($result->toArray());
    }
}
