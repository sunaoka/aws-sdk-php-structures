<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateLogAnomalyDetector;

trait CreateLogAnomalyDetectorTrait
{
    /**
     * @param CreateLogAnomalyDetectorRequest $args
     * @return CreateLogAnomalyDetectorResponse
     */
    public function createLogAnomalyDetector(CreateLogAnomalyDetectorRequest $args)
    {
        $result = parent::createLogAnomalyDetector($args->toArray());
        return new CreateLogAnomalyDetectorResponse($result->toArray());
    }
}
