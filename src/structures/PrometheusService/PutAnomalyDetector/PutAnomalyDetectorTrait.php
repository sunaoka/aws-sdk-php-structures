<?php

namespace Sunaoka\Aws\Structures\PrometheusService\PutAnomalyDetector;

trait PutAnomalyDetectorTrait
{
    /**
     * @param PutAnomalyDetectorRequest $args
     * @return PutAnomalyDetectorResponse
     */
    public function putAnomalyDetector(PutAnomalyDetectorRequest $args)
    {
        $result = parent::putAnomalyDetector($args->toArray());
        return new PutAnomalyDetectorResponse($result->toArray());
    }
}
