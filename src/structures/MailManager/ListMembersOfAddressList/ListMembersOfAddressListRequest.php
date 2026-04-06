<?php

namespace Sunaoka\Aws\Structures\MailManager\ListMembersOfAddressList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AddressListId
 * @property Shapes\AddressFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 1000>|null $PageSize
 */
class ListMembersOfAddressListRequest extends Request
{
    /**
     * @param array{
     *     AddressListId: string,
     *     Filter?: Shapes\AddressFilter|null,
     *     NextToken?: string|null,
     *     PageSize?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
