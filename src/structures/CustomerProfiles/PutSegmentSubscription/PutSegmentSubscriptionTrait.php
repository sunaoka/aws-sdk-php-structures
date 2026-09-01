<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutSegmentSubscription;

trait PutSegmentSubscriptionTrait
{
    /**
     * @param PutSegmentSubscriptionRequest $args
     * @return PutSegmentSubscriptionResponse
     */
    public function putSegmentSubscription(PutSegmentSubscriptionRequest $args)
    {
        $result = parent::putSegmentSubscription($args->toArray());
        return new PutSegmentSubscriptionResponse($result->toArray());
    }
}
