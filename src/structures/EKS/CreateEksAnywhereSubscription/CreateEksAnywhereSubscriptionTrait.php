<?php

namespace Sunaoka\Aws\Structures\EKS\CreateEksAnywhereSubscription;

trait CreateEksAnywhereSubscriptionTrait
{
    /**
     * @param CreateEksAnywhereSubscriptionRequest $args
     * @return CreateEksAnywhereSubscriptionResponse
     */
    public function createEksAnywhereSubscription(CreateEksAnywhereSubscriptionRequest $args)
    {
        $result = parent::createEksAnywhereSubscription($args->toArray());
        return new CreateEksAnywhereSubscriptionResponse($result->toArray());
    }
}
