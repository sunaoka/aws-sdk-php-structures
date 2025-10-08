<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteAccountSubscription;

trait DeleteAccountSubscriptionTrait
{
    /**
     * @param DeleteAccountSubscriptionRequest $args
     * @return DeleteAccountSubscriptionResponse
     */
    public function deleteAccountSubscription(DeleteAccountSubscriptionRequest $args)
    {
        $result = parent::deleteAccountSubscription($args->toArray());
        return new DeleteAccountSubscriptionResponse($result->toArray());
    }
}
