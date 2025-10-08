<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateUsageReportSubscription;

trait CreateUsageReportSubscriptionTrait
{
    /**
     * @param CreateUsageReportSubscriptionRequest $args
     * @return CreateUsageReportSubscriptionResponse
     */
    public function createUsageReportSubscription(CreateUsageReportSubscriptionRequest $args)
    {
        $result = parent::createUsageReportSubscription($args->toArray());
        return new CreateUsageReportSubscriptionResponse($result->toArray());
    }
}
