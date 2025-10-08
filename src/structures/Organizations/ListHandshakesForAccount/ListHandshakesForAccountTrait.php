<?php

namespace Sunaoka\Aws\Structures\Organizations\ListHandshakesForAccount;

trait ListHandshakesForAccountTrait
{
    /**
     * @param ListHandshakesForAccountRequest $args
     * @return ListHandshakesForAccountResponse
     */
    public function listHandshakesForAccount(ListHandshakesForAccountRequest $args)
    {
        $result = parent::listHandshakesForAccount($args->toArray());
        return new ListHandshakesForAccountResponse($result->toArray());
    }
}
