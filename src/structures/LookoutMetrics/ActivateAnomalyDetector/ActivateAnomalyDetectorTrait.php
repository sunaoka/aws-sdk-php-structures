<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ActivateAnomalyDetector;

trait ActivateAnomalyDetectorTrait
{
    /**
     * @param ActivateAnomalyDetectorRequest $args
     * @return ActivateAnomalyDetectorResponse
     */
    public function activateAnomalyDetector(ActivateAnomalyDetectorRequest $args)
    {
        $result = parent::activateAnomalyDetector($args->toArray());
        return new ActivateAnomalyDetectorResponse($result->toArray());
    }
}
