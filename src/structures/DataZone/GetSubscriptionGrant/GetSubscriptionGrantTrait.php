<?php

namespace Sunaoka\Aws\Structures\DataZone\GetSubscriptionGrant;

trait GetSubscriptionGrantTrait
{
    /**
     * @param GetSubscriptionGrantRequest $args
     * @return GetSubscriptionGrantResponse
     */
    public function getSubscriptionGrant(GetSubscriptionGrantRequest $args)
    {
        $result = parent::getSubscriptionGrant($args->toArray());
        return new GetSubscriptionGrantResponse($result->toArray());
    }
}
