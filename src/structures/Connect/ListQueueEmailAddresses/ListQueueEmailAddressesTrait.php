<?php

namespace Sunaoka\Aws\Structures\Connect\ListQueueEmailAddresses;

trait ListQueueEmailAddressesTrait
{
    /**
     * @param ListQueueEmailAddressesRequest $args
     * @return ListQueueEmailAddressesResponse
     */
    public function listQueueEmailAddresses(ListQueueEmailAddressesRequest $args)
    {
        $result = parent::listQueueEmailAddresses($args->toArray());
        return new ListQueueEmailAddressesResponse($result->toArray());
    }
}
