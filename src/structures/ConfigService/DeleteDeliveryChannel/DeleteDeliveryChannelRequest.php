<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteDeliveryChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeliveryChannelName
 */
class DeleteDeliveryChannelRequest extends Request
{
    /**
     * @param array{DeliveryChannelName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
