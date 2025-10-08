<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogAnomalyDetector;

trait GetLogAnomalyDetectorTrait
{
    /**
     * @param GetLogAnomalyDetectorRequest $args
     * @return GetLogAnomalyDetectorResponse
     */
    public function getLogAnomalyDetector(GetLogAnomalyDetectorRequest $args)
    {
        $result = parent::getLogAnomalyDetector($args->toArray());
        return new GetLogAnomalyDetectorResponse($result->toArray());
    }
}
