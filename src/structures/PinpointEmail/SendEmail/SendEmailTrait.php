<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\SendEmail;

trait SendEmailTrait
{
    /**
     * @param SendEmailRequest $args
     * @return SendEmailResponse
     */
    public function sendEmail(SendEmailRequest $args)
    {
        $result = parent::sendEmail($args->toArray());
        return new SendEmailResponse($result->toArray());
    }
}
