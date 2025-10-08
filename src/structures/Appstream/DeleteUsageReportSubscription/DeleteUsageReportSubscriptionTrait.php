<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteUsageReportSubscription;

trait DeleteUsageReportSubscriptionTrait
{
    /**
     * @param DeleteUsageReportSubscriptionRequest $args
     * @return DeleteUsageReportSubscriptionResponse
     */
    public function deleteUsageReportSubscription(DeleteUsageReportSubscriptionRequest $args)
    {
        $result = parent::deleteUsageReportSubscription($args->toArray());
        return new DeleteUsageReportSubscriptionResponse($result->toArray());
    }
}
