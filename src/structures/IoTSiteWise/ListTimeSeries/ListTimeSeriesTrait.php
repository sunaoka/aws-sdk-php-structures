<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListTimeSeries;

trait ListTimeSeriesTrait
{
    /**
     * @param ListTimeSeriesRequest $args
     * @return ListTimeSeriesResponse
     */
    public function listTimeSeries(ListTimeSeriesRequest $args)
    {
        $result = parent::listTimeSeries($args->toArray());
        return new ListTimeSeriesResponse($result->toArray());
    }
}
