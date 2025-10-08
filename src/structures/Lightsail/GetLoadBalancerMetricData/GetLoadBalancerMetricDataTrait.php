<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancerMetricData;

trait GetLoadBalancerMetricDataTrait
{
    /**
     * @param GetLoadBalancerMetricDataRequest $args
     * @return GetLoadBalancerMetricDataResponse
     */
    public function getLoadBalancerMetricData(GetLoadBalancerMetricDataRequest $args)
    {
        $result = parent::getLoadBalancerMetricData($args->toArray());
        return new GetLoadBalancerMetricDataResponse($result->toArray());
    }
}
