<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\UpdateSubscriptionsToEventBridge;

trait UpdateSubscriptionsToEventBridgeTrait
{
    /**
     * @param UpdateSubscriptionsToEventBridgeRequest $args
     * @return UpdateSubscriptionsToEventBridgeResponse
     */
    public function updateSubscriptionsToEventBridge(UpdateSubscriptionsToEventBridgeRequest $args)
    {
        $result = parent::updateSubscriptionsToEventBridge($args->toArray());
        return new UpdateSubscriptionsToEventBridgeResponse($result->toArray());
    }
}
