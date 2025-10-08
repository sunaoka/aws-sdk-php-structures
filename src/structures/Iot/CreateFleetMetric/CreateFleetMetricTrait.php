<?php

namespace Sunaoka\Aws\Structures\Iot\CreateFleetMetric;

trait CreateFleetMetricTrait
{
    /**
     * @param CreateFleetMetricRequest $args
     * @return CreateFleetMetricResponse
     */
    public function createFleetMetric(CreateFleetMetricRequest $args)
    {
        $result = parent::createFleetMetric($args->toArray());
        return new CreateFleetMetricResponse($result->toArray());
    }
}
