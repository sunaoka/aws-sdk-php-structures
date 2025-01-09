<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListQueuedMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MessageId
 * @property int<0, 1> $TransmitMode
 * @property string $ReceivedAt
 * @property LoRaWANSendDataToDevice $LoRaWAN
 */
class DownlinkQueueMessage extends Shape
{
    /**
     * @param array{
     *     MessageId?: string,
     *     TransmitMode?: int<0, 1>,
     *     ReceivedAt?: string,
     *     LoRaWAN?: LoRaWANSendDataToDevice
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
