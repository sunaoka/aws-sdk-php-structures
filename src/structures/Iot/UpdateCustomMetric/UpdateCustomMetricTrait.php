<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateCustomMetric;

trait UpdateCustomMetricTrait
{
    /**
     * @param UpdateCustomMetricRequest $args
     * @return UpdateCustomMetricResponse
     */
    public function updateCustomMetric(UpdateCustomMetricRequest $args)
    {
        $result = parent::updateCustomMetric($args->toArray());
        return new UpdateCustomMetricResponse($result->toArray());
    }
}
