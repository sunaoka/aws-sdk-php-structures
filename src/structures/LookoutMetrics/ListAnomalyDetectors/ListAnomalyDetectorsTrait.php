<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyDetectors;

trait ListAnomalyDetectorsTrait
{
    /**
     * @param ListAnomalyDetectorsRequest $args
     * @return ListAnomalyDetectorsResponse
     */
    public function listAnomalyDetectors(ListAnomalyDetectorsRequest $args)
    {
        $result = parent::listAnomalyDetectors($args->toArray());
        return new ListAnomalyDetectorsResponse($result->toArray());
    }
}
