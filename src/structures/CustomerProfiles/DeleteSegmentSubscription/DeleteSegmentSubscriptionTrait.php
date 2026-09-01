<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteSegmentSubscription;

trait DeleteSegmentSubscriptionTrait
{
    /**
     * @param DeleteSegmentSubscriptionRequest $args
     * @return DeleteSegmentSubscriptionResponse
     */
    public function deleteSegmentSubscription(DeleteSegmentSubscriptionRequest $args)
    {
        $result = parent::deleteSegmentSubscription($args->toArray());
        return new DeleteSegmentSubscriptionResponse($result->toArray());
    }
}
