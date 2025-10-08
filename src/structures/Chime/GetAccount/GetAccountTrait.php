<?php

namespace Sunaoka\Aws\Structures\Chime\GetAccount;

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
