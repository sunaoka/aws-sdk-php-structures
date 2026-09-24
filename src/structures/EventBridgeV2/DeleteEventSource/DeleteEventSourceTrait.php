<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DeleteEventSource;

trait DeleteEventSourceTrait
{
    /**
     * @param DeleteEventSourceRequest $args
     * @return DeleteEventSourceResponse
     */
    public function deleteEventSource(DeleteEventSourceRequest $args)
    {
        $result = parent::deleteEventSource($args->toArray());
        return new DeleteEventSourceResponse($result->toArray());
    }
}
