<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateAnomalyDetector;

trait CreateAnomalyDetectorTrait
{
    /**
     * @param CreateAnomalyDetectorRequest $args
     * @return CreateAnomalyDetectorResponse
     */
    public function createAnomalyDetector(CreateAnomalyDetectorRequest $args)
    {
        $result = parent::createAnomalyDetector($args->toArray());
        return new CreateAnomalyDetectorResponse($result->toArray());
    }
}
