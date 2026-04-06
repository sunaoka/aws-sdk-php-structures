<?php

namespace Sunaoka\Aws\Structures\Macie\DisassociateMemberAccount;

trait DisassociateMemberAccountTrait
{
    /**
     * @param DisassociateMemberAccountRequest $args
     * @return void
     */
    public function disassociateMemberAccount(DisassociateMemberAccountRequest $args)
    {
        parent::disassociateMemberAccount($args->toArray());
    }
}
