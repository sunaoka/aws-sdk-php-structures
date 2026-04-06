<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateAddressList;

trait CreateAddressListTrait
{
    /**
     * @param CreateAddressListRequest $args
     * @return CreateAddressListResponse
     */
    public function createAddressList(CreateAddressListRequest $args)
    {
        $result = parent::createAddressList($args->toArray());
        return new CreateAddressListResponse($result->toArray());
    }
}
