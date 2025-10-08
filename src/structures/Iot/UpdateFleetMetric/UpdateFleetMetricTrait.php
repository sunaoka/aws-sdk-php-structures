<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateFleetMetric;

trait UpdateFleetMetricTrait
{
    /**
     * @param UpdateFleetMetricRequest $args
     * @return void
     */
    public function updateFleetMetric(UpdateFleetMetricRequest $args)
    {
        parent::updateFleetMetric($args->toArray());
    }
}
