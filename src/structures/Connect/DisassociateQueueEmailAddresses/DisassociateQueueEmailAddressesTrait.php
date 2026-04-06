<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateQueueEmailAddresses;

trait DisassociateQueueEmailAddressesTrait
{
    /**
     * @param DisassociateQueueEmailAddressesRequest $args
     * @return void
     */
    public function disassociateQueueEmailAddresses(DisassociateQueueEmailAddressesRequest $args)
    {
        parent::disassociateQueueEmailAddresses($args->toArray());
    }
}
