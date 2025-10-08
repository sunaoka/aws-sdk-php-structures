<?php

namespace Sunaoka\Aws\Structures\Connect\StartWebRTCContact;

trait StartWebRTCContactTrait
{
    /**
     * @param StartWebRTCContactRequest $args
     * @return StartWebRTCContactResponse
     */
    public function startWebRTCContact(StartWebRTCContactRequest $args)
    {
        $result = parent::startWebRTCContact($args->toArray());
        return new StartWebRTCContactResponse($result->toArray());
    }
}
