<?php

namespace Sunaoka\Aws\Structures\Ses\ListVerifiedEmailAddresses;

trait ListVerifiedEmailAddressesTrait
{
    /**
     * @return ListVerifiedEmailAddressesResponse
     */
    public function listVerifiedEmailAddresses()
    {
        $result = parent::listVerifiedEmailAddresses();
        return new ListVerifiedEmailAddressesResponse($result->toArray());
    }
}
