<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DeactivateAnomalyDetector;

trait DeactivateAnomalyDetectorTrait
{
    /**
     * @param DeactivateAnomalyDetectorRequest $args
     * @return DeactivateAnomalyDetectorResponse
     */
    public function deactivateAnomalyDetector(DeactivateAnomalyDetectorRequest $args)
    {
        $result = parent::deactivateAnomalyDetector($args->toArray());
        return new DeactivateAnomalyDetectorResponse($result->toArray());
    }
}
