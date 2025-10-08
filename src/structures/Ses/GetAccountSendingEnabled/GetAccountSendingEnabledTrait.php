<?php

namespace Sunaoka\Aws\Structures\Ses\GetAccountSendingEnabled;

trait GetAccountSendingEnabledTrait
{
    /**
     * @return GetAccountSendingEnabledResponse
     */
    public function getAccountSendingEnabled()
    {
        $result = parent::getAccountSendingEnabled();
        return new GetAccountSendingEnabledResponse($result->toArray());
    }
}
