<?php

namespace Sunaoka\Aws\Structures\Iot\CreateCustomMetric;

trait CreateCustomMetricTrait
{
    /**
     * @param CreateCustomMetricRequest $args
     * @return CreateCustomMetricResponse
     */
    public function createCustomMetric(CreateCustomMetricRequest $args)
    {
        $result = parent::createCustomMetric($args->toArray());
        return new CreateCustomMetricResponse($result->toArray());
    }
}
