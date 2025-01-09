<?php

namespace Sunaoka\Aws\Structures\SSMContacts\UpdateContactChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactChannelId
 * @property string $Name
 * @property Shapes\ContactChannelAddress $DeliveryAddress
 */
class UpdateContactChannelRequest extends Request
{
    /**
     * @param array{
     *     ContactChannelId: string,
     *     Name?: string,
     *     DeliveryAddress?: Shapes\ContactChannelAddress
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
