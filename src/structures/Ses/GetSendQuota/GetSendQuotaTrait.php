<?php

namespace Sunaoka\Aws\Structures\Ses\GetSendQuota;

trait GetSendQuotaTrait
{
    /**
     * @return GetSendQuotaResponse
     */
    public function getSendQuota()
    {
        $result = parent::getSendQuota();
        return new GetSendQuotaResponse($result->toArray());
    }
}
