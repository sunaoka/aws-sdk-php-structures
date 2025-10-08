<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteCustomMetric;

trait DeleteCustomMetricTrait
{
    /**
     * @param DeleteCustomMetricRequest $args
     * @return DeleteCustomMetricResponse
     */
    public function deleteCustomMetric(DeleteCustomMetricRequest $args)
    {
        $result = parent::deleteCustomMetric($args->toArray());
        return new DeleteCustomMetricResponse($result->toArray());
    }
}
