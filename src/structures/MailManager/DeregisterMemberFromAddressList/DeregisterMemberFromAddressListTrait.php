<?php

namespace Sunaoka\Aws\Structures\MailManager\DeregisterMemberFromAddressList;

trait DeregisterMemberFromAddressListTrait
{
    /**
     * @param DeregisterMemberFromAddressListRequest $args
     * @return DeregisterMemberFromAddressListResponse
     */
    public function deregisterMemberFromAddressList(DeregisterMemberFromAddressListRequest $args)
    {
        $result = parent::deregisterMemberFromAddressList($args->toArray());
        return new DeregisterMemberFromAddressListResponse($result->toArray());
    }
}
