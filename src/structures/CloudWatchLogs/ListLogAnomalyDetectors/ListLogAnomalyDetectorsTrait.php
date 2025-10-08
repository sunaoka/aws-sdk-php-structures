<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListLogAnomalyDetectors;

trait ListLogAnomalyDetectorsTrait
{
    /**
     * @param ListLogAnomalyDetectorsRequest $args
     * @return ListLogAnomalyDetectorsResponse
     */
    public function listLogAnomalyDetectors(ListLogAnomalyDetectorsRequest $args)
    {
        $result = parent::listLogAnomalyDetectors($args->toArray());
        return new ListLogAnomalyDetectorsResponse($result->toArray());
    }
}
