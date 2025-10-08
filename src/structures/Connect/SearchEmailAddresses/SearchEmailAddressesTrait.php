<?php

namespace Sunaoka\Aws\Structures\Connect\SearchEmailAddresses;

trait SearchEmailAddressesTrait
{
    /**
     * @param SearchEmailAddressesRequest $args
     * @return SearchEmailAddressesResponse
     */
    public function searchEmailAddresses(SearchEmailAddressesRequest $args)
    {
        $result = parent::searchEmailAddresses($args->toArray());
        return new SearchEmailAddressesResponse($result->toArray());
    }
}
