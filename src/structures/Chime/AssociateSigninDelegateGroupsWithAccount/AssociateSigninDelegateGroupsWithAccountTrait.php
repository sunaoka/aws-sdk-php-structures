<?php

namespace Sunaoka\Aws\Structures\Chime\AssociateSigninDelegateGroupsWithAccount;

trait AssociateSigninDelegateGroupsWithAccountTrait
{
    /**
     * @param AssociateSigninDelegateGroupsWithAccountRequest $args
     * @return AssociateSigninDelegateGroupsWithAccountResponse
     */
    public function associateSigninDelegateGroupsWithAccount(AssociateSigninDelegateGroupsWithAccountRequest $args)
    {
        $result = parent::associateSigninDelegateGroupsWithAccount($args->toArray());
        return new AssociateSigninDelegateGroupsWithAccountResponse($result->toArray());
    }
}
