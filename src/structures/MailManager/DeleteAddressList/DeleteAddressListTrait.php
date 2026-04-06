<?php

namespace Sunaoka\Aws\Structures\MailManager\DeleteAddressList;

trait DeleteAddressListTrait
{
    /**
     * @param DeleteAddressListRequest $args
     * @return DeleteAddressListResponse
     */
    public function deleteAddressList(DeleteAddressListRequest $args)
    {
        $result = parent::deleteAddressList($args->toArray());
        return new DeleteAddressListResponse($result->toArray());
    }
}
