<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteTimeSeries;

trait DeleteTimeSeriesTrait
{
    /**
     * @param DeleteTimeSeriesRequest $args
     * @return void
     */
    public function deleteTimeSeries(DeleteTimeSeriesRequest $args)
    {
        parent::deleteTimeSeries($args->toArray());
    }
}
