<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\UpdateLogAnomalyDetector;

trait UpdateLogAnomalyDetectorTrait
{
    /**
     * @param UpdateLogAnomalyDetectorRequest $args
     * @return void
     */
    public function updateLogAnomalyDetector(UpdateLogAnomalyDetectorRequest $args)
    {
        parent::updateLogAnomalyDetector($args->toArray());
    }
}
