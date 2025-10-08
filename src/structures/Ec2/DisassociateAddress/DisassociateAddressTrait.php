<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateAddress;

trait DisassociateAddressTrait
{
    /**
     * @param DisassociateAddressRequest $args
     * @return void
     */
    public function disassociateAddress(DisassociateAddressRequest $args)
    {
        parent::disassociateAddress($args->toArray());
    }
}
