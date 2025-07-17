<?php

namespace Sunaoka\Aws\Structures\MailManager\DeregisterMemberFromAddressList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AddressListId
 * @property string $Address
 */
class DeregisterMemberFromAddressListRequest extends Request
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
