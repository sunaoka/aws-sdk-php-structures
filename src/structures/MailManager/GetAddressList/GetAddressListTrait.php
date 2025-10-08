<?php

namespace Sunaoka\Aws\Structures\MailManager\GetAddressList;

trait GetAddressListTrait
{
    /**
     * @param GetAddressListRequest $args
     * @return GetAddressListResponse
     */
    public function getAddressList(GetAddressListRequest $args)
    {
        $result = parent::getAddressList($args->toArray());
        return new GetAddressListResponse($result->toArray());
    }
}
