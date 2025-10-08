<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionGrant;

trait CreateSubscriptionGrantTrait
{
    /**
     * @param CreateSubscriptionGrantRequest $args
     * @return CreateSubscriptionGrantResponse
     */
    public function createSubscriptionGrant(CreateSubscriptionGrantRequest $args)
    {
        $result = parent::createSubscriptionGrant($args->toArray());
        return new CreateSubscriptionGrantResponse($result->toArray());
    }
}
