<?php

namespace Sunaoka\Aws\Structures\MailManager\GetAddressList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AddressListId
 */
class GetAddressListRequest extends Request
{
    /**
     * @param array{AddressListId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
