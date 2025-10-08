<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableAwsNetworkPerformanceMetricSubscription;

trait EnableAwsNetworkPerformanceMetricSubscriptionTrait
{
    /**
     * @param EnableAwsNetworkPerformanceMetricSubscriptionRequest $args
     * @return EnableAwsNetworkPerformanceMetricSubscriptionResponse
     */
    public function enableAwsNetworkPerformanceMetricSubscription(
        EnableAwsNetworkPerformanceMetricSubscriptionRequest $args,
    ) {
        $result = parent::enableAwsNetworkPerformanceMetricSubscription($args->toArray());
        return new EnableAwsNetworkPerformanceMetricSubscriptionResponse($result->toArray());
    }
}
