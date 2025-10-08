<?php

namespace Sunaoka\Aws\Structures\Ses\SendBulkTemplatedEmail;

trait SendBulkTemplatedEmailTrait
{
    /**
     * @param SendBulkTemplatedEmailRequest $args
     * @return SendBulkTemplatedEmailResponse
     */
    public function sendBulkTemplatedEmail(SendBulkTemplatedEmailRequest $args)
    {
        $result = parent::sendBulkTemplatedEmail($args->toArray());
        return new SendBulkTemplatedEmailResponse($result->toArray());
    }
}
