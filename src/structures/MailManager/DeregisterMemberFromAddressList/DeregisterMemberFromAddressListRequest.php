<?php

namespace Sunaoka\Aws\Structures\MailManager\DeregisterMemberFromAddressList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Address
 * @property string $AddressListId
 */
class DeregisterMemberFromAddressListRequest extends Request
{
    /**
     * @param array{
     *     Address: string,
     *     AddressListId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
