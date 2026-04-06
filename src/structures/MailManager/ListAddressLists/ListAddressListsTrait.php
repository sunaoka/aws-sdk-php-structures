<?php

namespace Sunaoka\Aws\Structures\MailManager\ListAddressLists;

trait ListAddressListsTrait
{
    /**
     * @param ListAddressListsRequest $args
     * @return ListAddressListsResponse
     */
    public function listAddressLists(ListAddressListsRequest $args)
    {
        $result = parent::listAddressLists($args->toArray());
        return new ListAddressListsResponse($result->toArray());
    }
}
