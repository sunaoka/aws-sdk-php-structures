<?php

namespace Sunaoka\Aws\Structures\Chime\DisassociateSigninDelegateGroupsFromAccount;

trait DisassociateSigninDelegateGroupsFromAccountTrait
{
    /**
     * @param DisassociateSigninDelegateGroupsFromAccountRequest $args
     * @return DisassociateSigninDelegateGroupsFromAccountResponse
     */
    public function disassociateSigninDelegateGroupsFromAccount(DisassociateSigninDelegateGroupsFromAccountRequest $args)
    {
        $result = parent::disassociateSigninDelegateGroupsFromAccount($args->toArray());
        return new DisassociateSigninDelegateGroupsFromAccountResponse($result->toArray());
    }
}
