<?php

namespace Sunaoka\Aws\Structures\Connect\StartOutboundEmailContact;

trait StartOutboundEmailContactTrait
{
    /**
     * @param StartOutboundEmailContactRequest $args
     * @return StartOutboundEmailContactResponse
     */
    public function startOutboundEmailContact(StartOutboundEmailContactRequest $args)
    {
        $result = parent::startOutboundEmailContact($args->toArray());
        return new StartOutboundEmailContactResponse($result->toArray());
    }
}
