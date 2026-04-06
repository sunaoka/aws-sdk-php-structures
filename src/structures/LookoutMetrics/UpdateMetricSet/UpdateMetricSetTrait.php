<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\UpdateMetricSet;

trait UpdateMetricSetTrait
{
    /**
     * @param UpdateMetricSetRequest $args
     * @return UpdateMetricSetResponse
     */
    public function updateMetricSet(UpdateMetricSetRequest $args)
    {
        $result = parent::updateMetricSet($args->toArray());
        return new UpdateMetricSetResponse($result->toArray());
    }
}
