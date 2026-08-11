<?php

namespace Sunaoka\Aws\Structures\Connect\CreateMetric;

trait CreateMetricTrait
{
    /**
     * @param CreateMetricRequest $args
     * @return CreateMetricResponse
     */
    public function createMetric(CreateMetricRequest $args)
    {
        $result = parent::createMetric($args->toArray());
        return new CreateMetricResponse($result->toArray());
    }
}
