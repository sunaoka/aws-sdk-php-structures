<?php

namespace Sunaoka\Aws\Structures\Sns\ConfirmSubscription;

trait ConfirmSubscriptionTrait
{
    /**
     * @param ConfirmSubscriptionRequest $args
     * @return ConfirmSubscriptionResponse
     */
    public function confirmSubscription(ConfirmSubscriptionRequest $args)
    {
        $result = parent::confirmSubscription($args->toArray());
        return new ConfirmSubscriptionResponse($result->toArray());
    }
}
