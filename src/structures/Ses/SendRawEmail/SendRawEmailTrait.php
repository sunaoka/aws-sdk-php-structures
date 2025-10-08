<?php

namespace Sunaoka\Aws\Structures\Ses\SendRawEmail;

trait SendRawEmailTrait
{
    /**
     * @param SendRawEmailRequest $args
     * @return SendRawEmailResponse
     */
    public function sendRawEmail(SendRawEmailRequest $args)
    {
        $result = parent::sendRawEmail($args->toArray());
        return new SendRawEmailResponse($result->toArray());
    }
}
