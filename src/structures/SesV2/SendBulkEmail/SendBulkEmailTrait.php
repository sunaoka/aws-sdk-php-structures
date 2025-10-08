<?php

namespace Sunaoka\Aws\Structures\SesV2\SendBulkEmail;

trait SendBulkEmailTrait
{
    /**
     * @param SendBulkEmailRequest $args
     * @return SendBulkEmailResponse
     */
    public function sendBulkEmail(SendBulkEmailRequest $args)
    {
        $result = parent::sendBulkEmail($args->toArray());
        return new SendBulkEmailResponse($result->toArray());
    }
}
