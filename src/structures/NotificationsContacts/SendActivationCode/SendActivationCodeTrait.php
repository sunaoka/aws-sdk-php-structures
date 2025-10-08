<?php

namespace Sunaoka\Aws\Structures\NotificationsContacts\SendActivationCode;

trait SendActivationCodeTrait
{
    /**
     * @param SendActivationCodeRequest $args
     * @return SendActivationCodeResponse
     */
    public function sendActivationCode(SendActivationCodeRequest $args)
    {
        $result = parent::sendActivationCode($args->toArray());
        return new SendActivationCodeResponse($result->toArray());
    }
}
