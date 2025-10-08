<?php

namespace Sunaoka\Aws\Structures\SesV2\SendCustomVerificationEmail;

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
