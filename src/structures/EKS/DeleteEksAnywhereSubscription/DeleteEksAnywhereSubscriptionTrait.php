<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteEksAnywhereSubscription;

trait DeleteEksAnywhereSubscriptionTrait
{
    /**
     * @param DeleteEksAnywhereSubscriptionRequest $args
     * @return DeleteEksAnywhereSubscriptionResponse
     */
    public function deleteEksAnywhereSubscription(DeleteEksAnywhereSubscriptionRequest $args)
    {
        $result = parent::deleteEksAnywhereSubscription($args->toArray());
        return new DeleteEksAnywhereSubscriptionResponse($result->toArray());
    }
}
