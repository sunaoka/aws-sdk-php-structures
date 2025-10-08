<?php

namespace Sunaoka\Aws\Structures\Chime\RedactRoomMessage;

trait RedactRoomMessageTrait
{
    /**
     * @param RedactRoomMessageRequest $args
     * @return RedactRoomMessageResponse
     */
    public function redactRoomMessage(RedactRoomMessageRequest $args)
    {
        $result = parent::redactRoomMessage($args->toArray());
        return new RedactRoomMessageResponse($result->toArray());
    }
}
