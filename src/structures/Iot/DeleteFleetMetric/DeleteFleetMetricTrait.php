<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteFleetMetric;

trait DeleteFleetMetricTrait
{
    /**
     * @param DeleteFleetMetricRequest $args
     * @return void
     */
    public function deleteFleetMetric(DeleteFleetMetricRequest $args)
    {
        parent::deleteFleetMetric($args->toArray());
    }
}
