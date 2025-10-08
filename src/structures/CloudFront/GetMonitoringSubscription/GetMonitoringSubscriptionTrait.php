<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetMonitoringSubscription;

trait GetMonitoringSubscriptionTrait
{
    /**
     * @param GetMonitoringSubscriptionRequest $args
     * @return GetMonitoringSubscriptionResponse
     */
    public function getMonitoringSubscription(GetMonitoringSubscriptionRequest $args)
    {
        $result = parent::getMonitoringSubscription($args->toArray());
        return new GetMonitoringSubscriptionResponse($result->toArray());
    }
}
