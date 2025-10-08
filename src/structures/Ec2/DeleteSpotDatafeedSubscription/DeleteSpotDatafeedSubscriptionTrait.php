<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteSpotDatafeedSubscription;

trait DeleteSpotDatafeedSubscriptionTrait
{
    /**
     * @param DeleteSpotDatafeedSubscriptionRequest $args
     * @return void
     */
    public function deleteSpotDatafeedSubscription(DeleteSpotDatafeedSubscriptionRequest $args)
    {
        parent::deleteSpotDatafeedSubscription($args->toArray());
    }
}
