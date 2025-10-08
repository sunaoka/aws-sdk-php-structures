<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteSubscriptionGrant;

trait DeleteSubscriptionGrantTrait
{
    /**
     * @param DeleteSubscriptionGrantRequest $args
     * @return DeleteSubscriptionGrantResponse
     */
    public function deleteSubscriptionGrant(DeleteSubscriptionGrantRequest $args)
    {
        $result = parent::deleteSubscriptionGrant($args->toArray());
        return new DeleteSubscriptionGrantResponse($result->toArray());
    }
}
