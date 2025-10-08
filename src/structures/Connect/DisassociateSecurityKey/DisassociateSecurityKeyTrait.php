<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateSecurityKey;

trait DisassociateSecurityKeyTrait
{
    /**
     * @param DisassociateSecurityKeyRequest $args
     * @return void
     */
    public function disassociateSecurityKey(DisassociateSecurityKeyRequest $args)
    {
        parent::disassociateSecurityKey($args->toArray());
    }
}
