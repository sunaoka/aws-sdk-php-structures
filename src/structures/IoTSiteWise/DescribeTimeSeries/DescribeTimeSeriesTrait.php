<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeTimeSeries;

trait DescribeTimeSeriesTrait
{
    /**
     * @param DescribeTimeSeriesRequest $args
     * @return DescribeTimeSeriesResponse
     */
    public function describeTimeSeries(DescribeTimeSeriesRequest $args)
    {
        $result = parent::describeTimeSeries($args->toArray());
        return new DescribeTimeSeriesResponse($result->toArray());
    }
}
