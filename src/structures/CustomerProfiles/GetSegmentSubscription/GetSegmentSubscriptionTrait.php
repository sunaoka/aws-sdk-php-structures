<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentSubscription;

trait GetSegmentSubscriptionTrait
{
    /**
     * @param GetSegmentSubscriptionRequest $args
     * @return GetSegmentSubscriptionResponse
     */
    public function getSegmentSubscription(GetSegmentSubscriptionRequest $args)
    {
        $result = parent::getSegmentSubscription($args->toArray());
        return new GetSegmentSubscriptionResponse($result->toArray());
    }
}
