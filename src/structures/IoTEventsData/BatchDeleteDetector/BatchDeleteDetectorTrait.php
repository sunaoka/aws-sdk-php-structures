<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchDeleteDetector;

trait BatchDeleteDetectorTrait
{
    /**
     * @param BatchDeleteDetectorRequest $args
     * @return BatchDeleteDetectorResponse
     */
    public function batchDeleteDetector(BatchDeleteDetectorRequest $args)
    {
        $result = parent::batchDeleteDetector($args->toArray());
        return new BatchDeleteDetectorResponse($result->toArray());
    }
}
