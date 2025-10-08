<?php

namespace Sunaoka\Aws\Structures\Sns\GetSMSSandboxAccountStatus;

trait GetSMSSandboxAccountStatusTrait
{
    /**
     * @param GetSMSSandboxAccountStatusRequest $args
     * @return GetSMSSandboxAccountStatusResponse
     */
    public function getSMSSandboxAccountStatus(GetSMSSandboxAccountStatusRequest $args)
    {
        $result = parent::getSMSSandboxAccountStatus($args->toArray());
        return new GetSMSSandboxAccountStatusResponse($result->toArray());
    }
}
