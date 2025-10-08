<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteAccount;

trait DeleteAccountTrait
{
    /**
     * @param DeleteAccountRequest $args
     * @return DeleteAccountResponse
     */
    public function deleteAccount(DeleteAccountRequest $args)
    {
        $result = parent::deleteAccount($args->toArray());
        return new DeleteAccountResponse($result->toArray());
    }
}
