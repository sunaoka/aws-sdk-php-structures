<?php

namespace Sunaoka\Aws\Structures\Rds\RemoveSourceIdentifierFromSubscription;

trait RemoveSourceIdentifierFromSubscriptionTrait
{
    /**
     * @param RemoveSourceIdentifierFromSubscriptionRequest $args
     * @return RemoveSourceIdentifierFromSubscriptionResponse
     */
    public function removeSourceIdentifierFromSubscription(RemoveSourceIdentifierFromSubscriptionRequest $args)
    {
        $result = parent::removeSourceIdentifierFromSubscription($args->toArray());
        return new RemoveSourceIdentifierFromSubscriptionResponse($result->toArray());
    }
}
