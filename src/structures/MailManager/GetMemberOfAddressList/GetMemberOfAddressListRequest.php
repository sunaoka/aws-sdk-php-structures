<?php

namespace Sunaoka\Aws\Structures\MailManager\GetMemberOfAddressList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AddressListId
 * @property string $Address
 */
class GetMemberOfAddressListRequest extends Request
{
    /**
     * @param array{
     *     AddressListId: string,
     *     Address: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
