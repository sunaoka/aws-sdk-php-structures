<?php

namespace Sunaoka\Aws\Structures\SesV2\GetAccount;

trait GetAccountTrait
{
    /**
     * @param GetAccountRequest $args
     * @return GetAccountResponse
     */
    public function getAccount(GetAccountRequest $args)
    {
        $result = parent::getAccount($args->toArray());
        return new GetAccountResponse($result->toArray());
    }
}
