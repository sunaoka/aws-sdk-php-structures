<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListContactChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactChannelArn
 * @property string $ContactArn
 * @property string $Name
 * @property 'SMS'|'VOICE'|'EMAIL'|null $Type
 * @property ContactChannelAddress $DeliveryAddress
 * @property 'ACTIVATED'|'NOT_ACTIVATED' $ActivationStatus
 */
class ContactChannel extends Shape
{
    /**
     * @param array{
     *     ContactChannelArn: string,
     *     ContactArn: string,
     *     Name: string,
     *     Type?: 'SMS'|'VOICE'|'EMAIL'|null,
     *     DeliveryAddress: ContactChannelAddress,
     *     ActivationStatus: 'ACTIVATED'|'NOT_ACTIVATED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
