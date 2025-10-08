<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSpotDatafeedSubscription;

trait CreateSpotDatafeedSubscriptionTrait
{
    /**
     * @param CreateSpotDatafeedSubscriptionRequest $args
     * @return CreateSpotDatafeedSubscriptionResponse
     */
    public function createSpotDatafeedSubscription(CreateSpotDatafeedSubscriptionRequest $args)
    {
        $result = parent::createSpotDatafeedSubscription($args->toArray());
        return new CreateSpotDatafeedSubscriptionResponse($result->toArray());
    }
}
