<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateAddressList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $AddressListName
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateAddressListRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     AddressListName: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
