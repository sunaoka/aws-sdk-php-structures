<?php

namespace Sunaoka\Aws\Structures\FMS\DisassociateAdminAccount;

trait DisassociateAdminAccountTrait
{
    /**
     * @param DisassociateAdminAccountRequest $args
     * @return void
     */
    public function disassociateAdminAccount(DisassociateAdminAccountRequest $args)
    {
        parent::disassociateAdminAccount($args->toArray());
    }
}
