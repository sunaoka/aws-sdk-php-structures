<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListActorMessages;

trait ListActorMessagesTrait
{
    /**
     * @param ListActorMessagesRequest $args
     * @return ListActorMessagesResponse
     */
    public function listActorMessages(ListActorMessagesRequest $args)
    {
        $result = parent::listActorMessages($args->toArray());
        return new ListActorMessagesResponse($result->toArray());
    }
}
