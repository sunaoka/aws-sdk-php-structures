<?php

namespace Sunaoka\Aws\Structures\Ses\SendCustomVerificationEmail;

trait SendCustomVerificationEmailTrait
{
    /**
     * @param SendCustomVerificationEmailRequest $args
     * @return SendCustomVerificationEmailResponse
     */
    public function sendCustomVerificationEmail(SendCustomVerificationEmailRequest $args)
    {
        $result = parent::sendCustomVerificationEmail($args->toArray());
        return new SendCustomVerificationEmailResponse($result->toArray());
    }
}
