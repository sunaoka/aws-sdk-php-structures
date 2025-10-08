<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateSubscriptionGrantStatus;

trait UpdateSubscriptionGrantStatusTrait
{
    /**
     * @param UpdateSubscriptionGrantStatusRequest $args
     * @return UpdateSubscriptionGrantStatusResponse
     */
    public function updateSubscriptionGrantStatus(UpdateSubscriptionGrantStatusRequest $args)
    {
        $result = parent::updateSubscriptionGrantStatus($args->toArray());
        return new UpdateSubscriptionGrantStatusResponse($result->toArray());
    }
}
