<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableAwsNetworkPerformanceMetricSubscription;

trait DisableAwsNetworkPerformanceMetricSubscriptionTrait
{
    /**
     * @param DisableAwsNetworkPerformanceMetricSubscriptionRequest $args
     * @return DisableAwsNetworkPerformanceMetricSubscriptionResponse
     */
    public function disableAwsNetworkPerformanceMetricSubscription(DisableAwsNetworkPerformanceMetricSubscriptionRequest $args)
    {
        $result = parent::disableAwsNetworkPerformanceMetricSubscription($args->toArray());
        return new DisableAwsNetworkPerformanceMetricSubscriptionResponse($result->toArray());
    }
}
