<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteQueuedMessages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $MessageId
 * @property 'Sidewalk'|'LoRaWAN' $WirelessDeviceType
 */
class DeleteQueuedMessagesRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     MessageId: string,
     *     WirelessDeviceType?: 'Sidewalk'|'LoRaWAN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
