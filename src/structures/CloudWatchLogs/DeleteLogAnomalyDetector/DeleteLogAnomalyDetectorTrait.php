<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteLogAnomalyDetector;

trait DeleteLogAnomalyDetectorTrait
{
    /**
     * @param DeleteLogAnomalyDetectorRequest $args
     * @return void
     */
    public function deleteLogAnomalyDetector(DeleteLogAnomalyDetectorRequest $args)
    {
        parent::deleteLogAnomalyDetector($args->toArray());
    }
}
