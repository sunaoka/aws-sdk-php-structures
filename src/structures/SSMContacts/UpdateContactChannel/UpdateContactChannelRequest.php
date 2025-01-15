<?php

namespace Sunaoka\Aws\Structures\SSMContacts\UpdateContactChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactChannelId
 * @property string|null $Name
 * @property Shapes\ContactChannelAddress|null $DeliveryAddress
 */
class UpdateContactChannelRequest extends Request
{
    /**
     * @param array{
     *     ContactChannelId: string,
     *     Name?: string|null,
     *     DeliveryAddress?: Shapes\ContactChannelAddress|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
