<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteMetric;

trait DeleteMetricTrait
{
    /**
     * @param DeleteMetricRequest $args
     * @return DeleteMetricResponse
     */
    public function deleteMetric(DeleteMetricRequest $args)
    {
        $result = parent::deleteMetric($args->toArray());
        return new DeleteMetricResponse($result->toArray());
    }
}
