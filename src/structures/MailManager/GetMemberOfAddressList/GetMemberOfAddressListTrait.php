<?php

namespace Sunaoka\Aws\Structures\MailManager\GetMemberOfAddressList;

trait GetMemberOfAddressListTrait
{
    /**
     * @param GetMemberOfAddressListRequest $args
     * @return GetMemberOfAddressListResponse
     */
    public function getMemberOfAddressList(GetMemberOfAddressListRequest $args)
    {
        $result = parent::getMemberOfAddressList($args->toArray());
        return new GetMemberOfAddressListResponse($result->toArray());
    }
}
