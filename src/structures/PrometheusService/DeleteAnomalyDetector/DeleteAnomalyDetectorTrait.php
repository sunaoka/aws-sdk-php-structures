<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DeleteAnomalyDetector;

trait DeleteAnomalyDetectorTrait
{
    /**
     * @param DeleteAnomalyDetectorRequest $args
     * @return void
     */
    public function deleteAnomalyDetector(DeleteAnomalyDetectorRequest $args)
    {
        parent::deleteAnomalyDetector($args->toArray());
    }
}
