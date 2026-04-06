<?php

namespace Sunaoka\Aws\Structures\MailManager\ListMembersOfAddressList;

trait ListMembersOfAddressListTrait
{
    /**
     * @param ListMembersOfAddressListRequest $args
     * @return ListMembersOfAddressListResponse
     */
    public function listMembersOfAddressList(ListMembersOfAddressListRequest $args)
    {
        $result = parent::listMembersOfAddressList($args->toArray());
        return new ListMembersOfAddressListResponse($result->toArray());
    }
}
