<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteSubscriptionRequest;

trait DeleteSubscriptionRequestTrait
{
    /**
     * @param DeleteSubscriptionRequestRequest $args
     * @return void
     */
    public function deleteSubscriptionRequest(DeleteSubscriptionRequestRequest $args)
    {
        parent::deleteSubscriptionRequest($args->toArray());
    }
}
