<?php

namespace Sunaoka\Aws\Structures\WorkMail\UpdateMailboxQuota;

trait UpdateMailboxQuotaTrait
{
    /**
     * @param UpdateMailboxQuotaRequest $args
     * @return UpdateMailboxQuotaResponse
     */
    public function updateMailboxQuota(UpdateMailboxQuotaRequest $args)
    {
        $result = parent::updateMailboxQuota($args->toArray());
        return new UpdateMailboxQuotaResponse($result->toArray());
    }
}
