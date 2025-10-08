<?php

namespace Sunaoka\Aws\Structures\MailManager\RegisterMemberToAddressList;

trait RegisterMemberToAddressListTrait
{
    /**
     * @param RegisterMemberToAddressListRequest $args
     * @return RegisterMemberToAddressListResponse
     */
    public function registerMemberToAddressList(RegisterMemberToAddressListRequest $args)
    {
        $result = parent::registerMemberToAddressList($args->toArray());
        return new RegisterMemberToAddressListResponse($result->toArray());
    }
}
