<?php

namespace Sunaoka\Aws\Structures\Connect\StartOutboundVoiceContact;

trait StartOutboundVoiceContactTrait
{
    /**
     * @param StartOutboundVoiceContactRequest $args
     * @return StartOutboundVoiceContactResponse
     */
    public function startOutboundVoiceContact(StartOutboundVoiceContactRequest $args)
    {
        $result = parent::startOutboundVoiceContact($args->toArray());
        return new StartOutboundVoiceContactResponse($result->toArray());
    }
}
