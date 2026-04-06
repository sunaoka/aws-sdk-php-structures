<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeleteEvent;

trait DeleteEventTrait
{
    /**
     * @param DeleteEventRequest $args
     * @return DeleteEventResponse
     */
    public function deleteEvent(DeleteEventRequest $args)
    {
        $result = parent::deleteEvent($args->toArray());
        return new DeleteEventResponse($result->toArray());
    }
}
