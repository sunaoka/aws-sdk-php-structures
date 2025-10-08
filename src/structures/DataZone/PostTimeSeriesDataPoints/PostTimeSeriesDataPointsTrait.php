<?php

namespace Sunaoka\Aws\Structures\DataZone\PostTimeSeriesDataPoints;

trait PostTimeSeriesDataPointsTrait
{
    /**
     * @param PostTimeSeriesDataPointsRequest $args
     * @return PostTimeSeriesDataPointsResponse
     */
    public function postTimeSeriesDataPoints(PostTimeSeriesDataPointsRequest $args)
    {
        $result = parent::postTimeSeriesDataPoints($args->toArray());
        return new PostTimeSeriesDataPointsResponse($result->toArray());
    }
}
