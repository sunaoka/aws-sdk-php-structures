<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateQueueEmailAddresses;

trait AssociateQueueEmailAddressesTrait
{
    /**
     * @param AssociateQueueEmailAddressesRequest $args
     * @return void
     */
    public function associateQueueEmailAddresses(AssociateQueueEmailAddressesRequest $args)
    {
        parent::associateQueueEmailAddresses($args->toArray());
    }
}
