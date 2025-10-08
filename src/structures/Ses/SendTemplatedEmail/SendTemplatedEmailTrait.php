<?php

namespace Sunaoka\Aws\Structures\Ses\SendTemplatedEmail;

trait SendTemplatedEmailTrait
{
    /**
     * @param SendTemplatedEmailRequest $args
     * @return SendTemplatedEmailResponse
     */
    public function sendTemplatedEmail(SendTemplatedEmailRequest $args)
    {
        $result = parent::sendTemplatedEmail($args->toArray());
        return new SendTemplatedEmailResponse($result->toArray());
    }
}
