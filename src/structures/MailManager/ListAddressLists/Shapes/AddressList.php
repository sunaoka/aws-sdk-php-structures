<?php

namespace Sunaoka\Aws\Structures\MailManager\ListAddressLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AddressListArn
 * @property string $AddressListId
 * @property string $AddressListName
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 */
class AddressList extends Shape
{
    /**
     * @param array{
     *     AddressListArn: string,
     *     AddressListId: string,
     *     AddressListName: string,
     *     CreatedTimestamp: \Aws\Api\DateTimeResult,
     *     LastUpdatedTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
