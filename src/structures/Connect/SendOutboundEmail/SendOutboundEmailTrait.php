<?php

namespace Sunaoka\Aws\Structures\Connect\SendOutboundEmail;

trait SendOutboundEmailTrait
{
    /**
     * @param SendOutboundEmailRequest $args
     * @return SendOutboundEmailResponse
     */
    public function sendOutboundEmail(SendOutboundEmailRequest $args)
    {
        $result = parent::sendOutboundEmail($args->toArray());
        return new SendOutboundEmailResponse($result->toArray());
    }
}
