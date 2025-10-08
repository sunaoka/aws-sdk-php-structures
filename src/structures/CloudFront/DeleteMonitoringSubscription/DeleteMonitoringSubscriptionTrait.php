<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteMonitoringSubscription;

trait DeleteMonitoringSubscriptionTrait
{
    /**
     * @param DeleteMonitoringSubscriptionRequest $args
     * @return DeleteMonitoringSubscriptionResponse
     */
    public function deleteMonitoringSubscription(DeleteMonitoringSubscriptionRequest $args)
    {
        $result = parent::deleteMonitoringSubscription($args->toArray());
        return new DeleteMonitoringSubscriptionResponse($result->toArray());
    }
}
