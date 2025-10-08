<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateAccount;

trait UpdateAccountTrait
{
    /**
     * @param UpdateAccountRequest $args
     * @return UpdateAccountResponse
     */
    public function updateAccount(UpdateAccountRequest $args)
    {
        $result = parent::updateAccount($args->toArray());
        return new UpdateAccountResponse($result->toArray());
    }
}
