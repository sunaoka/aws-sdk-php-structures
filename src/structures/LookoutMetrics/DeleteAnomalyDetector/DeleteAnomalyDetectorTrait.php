<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DeleteAnomalyDetector;

trait DeleteAnomalyDetectorTrait
{
    /**
     * @param DeleteAnomalyDetectorRequest $args
     * @return DeleteAnomalyDetectorResponse
     */
    public function deleteAnomalyDetector(DeleteAnomalyDetectorRequest $args)
    {
        $result = parent::deleteAnomalyDetector($args->toArray());
        return new DeleteAnomalyDetectorResponse($result->toArray());
    }
}
