<?php

namespace Sunaoka\Aws\Structures\MailManager\GetMemberOfAddressList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Address
 * @property string $AddressListId
 */
class GetMemberOfAddressListRequest extends Request
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
