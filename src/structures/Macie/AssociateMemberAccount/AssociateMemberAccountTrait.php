<?php

namespace Sunaoka\Aws\Structures\Macie\AssociateMemberAccount;

trait AssociateMemberAccountTrait
{
    /**
     * @param AssociateMemberAccountRequest $args
     * @return void
     */
    public function associateMemberAccount(AssociateMemberAccountRequest $args)
    {
        parent::associateMemberAccount($args->toArray());
    }
}
