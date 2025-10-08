<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetMasterAccount;

trait GetMasterAccountTrait
{
    /**
     * @param GetMasterAccountRequest $args
     * @return GetMasterAccountResponse
     */
    public function getMasterAccount(GetMasterAccountRequest $args)
    {
        $result = parent::getMasterAccount($args->toArray());
        return new GetMasterAccountResponse($result->toArray());
    }
}
