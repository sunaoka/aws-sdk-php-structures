<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\CreateMetricSet;

trait CreateMetricSetTrait
{
    /**
     * @param CreateMetricSetRequest $args
     * @return CreateMetricSetResponse
     */
    public function createMetricSet(CreateMetricSetRequest $args)
    {
        $result = parent::createMetricSet($args->toArray());
        return new CreateMetricSetResponse($result->toArray());
    }
}
