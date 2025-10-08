<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\GetRetainedMessage;

trait GetRetainedMessageTrait
{
    /**
     * @param GetRetainedMessageRequest $args
     * @return GetRetainedMessageResponse
     */
    public function getRetainedMessage(GetRetainedMessageRequest $args)
    {
        $result = parent::getRetainedMessage($args->toArray());
        return new GetRetainedMessageResponse($result->toArray());
    }
}
