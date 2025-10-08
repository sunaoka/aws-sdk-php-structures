<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateMonitoringSubscription;

trait CreateMonitoringSubscriptionTrait
{
    /**
     * @param CreateMonitoringSubscriptionRequest $args
     * @return CreateMonitoringSubscriptionResponse
     */
    public function createMonitoringSubscription(CreateMonitoringSubscriptionRequest $args)
    {
        $result = parent::createMonitoringSubscription($args->toArray());
        return new CreateMonitoringSubscriptionResponse($result->toArray());
    }
}
