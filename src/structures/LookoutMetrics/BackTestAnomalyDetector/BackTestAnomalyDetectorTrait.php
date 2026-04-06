<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\BackTestAnomalyDetector;

trait BackTestAnomalyDetectorTrait
{
    /**
     * @param BackTestAnomalyDetectorRequest $args
     * @return BackTestAnomalyDetectorResponse
     */
    public function backTestAnomalyDetector(BackTestAnomalyDetectorRequest $args)
    {
        $result = parent::backTestAnomalyDetector($args->toArray());
        return new BackTestAnomalyDetectorResponse($result->toArray());
    }
}
