<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutDeliveryChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DeliveryChannel $DeliveryChannel
 */
class PutDeliveryChannelRequest extends Request
{
    /**
     * @param array{DeliveryChannel: Shapes\DeliveryChannel} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
