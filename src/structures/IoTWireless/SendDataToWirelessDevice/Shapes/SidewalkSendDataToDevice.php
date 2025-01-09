<?php

namespace Sunaoka\Aws\Structures\IoTWireless\SendDataToWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Seq
 * @property 'CUSTOM_COMMAND_ID_NOTIFY'|'CUSTOM_COMMAND_ID_GET'|'CUSTOM_COMMAND_ID_SET'|'CUSTOM_COMMAND_ID_RESP' $MessageType
 * @property int $AckModeRetryDurationSecs
 */
class SidewalkSendDataToDevice extends Shape
{
    /**
     * @param array{
     *     Seq?: int,
     *     MessageType?: 'CUSTOM_COMMAND_ID_NOTIFY'|'CUSTOM_COMMAND_ID_GET'|'CUSTOM_COMMAND_ID_SET'|'CUSTOM_COMMAND_ID_RESP',
     *     AckModeRetryDurationSecs?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
