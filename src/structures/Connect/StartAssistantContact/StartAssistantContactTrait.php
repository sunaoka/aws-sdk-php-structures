<?php

namespace Sunaoka\Aws\Structures\Connect\StartAssistantContact;

trait StartAssistantContactTrait
{
    /**
     * @param StartAssistantContactRequest $args
     * @return StartAssistantContactResponse
     */
    public function startAssistantContact(StartAssistantContactRequest $args)
    {
        $result = parent::startAssistantContact($args->toArray());
        return new StartAssistantContactResponse($result->toArray());
    }
}
