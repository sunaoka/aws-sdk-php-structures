<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchUpdateDetector;

trait BatchUpdateDetectorTrait
{
    /**
     * @param BatchUpdateDetectorRequest $args
     * @return BatchUpdateDetectorResponse
     */
    public function batchUpdateDetector(BatchUpdateDetectorRequest $args)
    {
        $result = parent::batchUpdateDetector($args->toArray());
        return new BatchUpdateDetectorResponse($result->toArray());
    }
}
