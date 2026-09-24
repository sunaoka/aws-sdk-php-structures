<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\UpdateEventSource;

trait UpdateEventSourceTrait
{
    /**
     * @param UpdateEventSourceRequest $args
     * @return UpdateEventSourceResponse
     */
    public function updateEventSource(UpdateEventSourceRequest $args)
    {
        $result = parent::updateEventSource($args->toArray());
        return new UpdateEventSourceResponse($result->toArray());
    }
}
