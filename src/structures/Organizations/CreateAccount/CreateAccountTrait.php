<?php

namespace Sunaoka\Aws\Structures\Organizations\CreateAccount;

trait CreateAccountTrait
{
    /**
     * @param CreateAccountRequest $args
     * @return CreateAccountResponse
     */
    public function createAccount(CreateAccountRequest $args)
    {
        $result = parent::createAccount($args->toArray());
        return new CreateAccountResponse($result->toArray());
    }
}
