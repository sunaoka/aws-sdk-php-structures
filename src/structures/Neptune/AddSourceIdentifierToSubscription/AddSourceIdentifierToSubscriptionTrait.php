<?php

namespace Sunaoka\Aws\Structures\Neptune\AddSourceIdentifierToSubscription;

trait AddSourceIdentifierToSubscriptionTrait
{
    /**
     * @param AddSourceIdentifierToSubscriptionRequest $args
     * @return AddSourceIdentifierToSubscriptionResponse
     */
    public function addSourceIdentifierToSubscription(AddSourceIdentifierToSubscriptionRequest $args)
    {
        $result = parent::addSourceIdentifierToSubscription($args->toArray());
        return new AddSourceIdentifierToSubscriptionResponse($result->toArray());
    }
}
