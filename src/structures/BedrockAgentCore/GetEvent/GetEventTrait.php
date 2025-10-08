<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetEvent;

trait GetEventTrait
{
    /**
     * @param GetEventRequest $args
     * @return GetEventResponse
     */
    public function getEvent(GetEventRequest $args)
    {
        $result = parent::getEvent($args->toArray());
        return new GetEventResponse($result->toArray());
    }
}
