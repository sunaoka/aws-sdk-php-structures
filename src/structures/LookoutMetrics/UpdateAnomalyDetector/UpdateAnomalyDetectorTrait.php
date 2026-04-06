<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\UpdateAnomalyDetector;

trait UpdateAnomalyDetectorTrait
{
    /**
     * @param UpdateAnomalyDetectorRequest $args
     * @return UpdateAnomalyDetectorResponse
     */
    public function updateAnomalyDetector(UpdateAnomalyDetectorRequest $args)
    {
        $result = parent::updateAnomalyDetector($args->toArray());
        return new UpdateAnomalyDetectorResponse($result->toArray());
    }
}
