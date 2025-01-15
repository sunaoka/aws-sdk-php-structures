<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListQueuedMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MessageId
 * @property int<0, 1>|null $TransmitMode
 * @property string|null $ReceivedAt
 * @property LoRaWANSendDataToDevice|null $LoRaWAN
 */
class DownlinkQueueMessage extends Shape
{
    /**
     * @param array{
     *     MessageId?: string|null,
     *     TransmitMode?: int<0, 1>|null,
     *     ReceivedAt?: string|null,
     *     LoRaWAN?: LoRaWANSendDataToDevice|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
