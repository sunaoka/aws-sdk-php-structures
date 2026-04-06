<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityManagerMetricDimensions;

trait GetCapacityManagerMetricDimensionsTrait
{
    /**
     * @param GetCapacityManagerMetricDimensionsRequest $args
     * @return GetCapacityManagerMetricDimensionsResponse
     */
    public function getCapacityManagerMetricDimensions(GetCapacityManagerMetricDimensionsRequest $args)
    {
        $result = parent::getCapacityManagerMetricDimensions($args->toArray());
        return new GetCapacityManagerMetricDimensionsResponse($result->toArray());
    }
}
