<?php

namespace Sunaoka\Aws\Structures\IoTWireless\SendDataToWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 16383> $Seq
 * @property 'CUSTOM_COMMAND_ID_NOTIFY'|'CUSTOM_COMMAND_ID_GET'|'CUSTOM_COMMAND_ID_SET'|'CUSTOM_COMMAND_ID_RESP' $MessageType
 * @property int<0, 604800> $AckModeRetryDurationSecs
 */
class SidewalkSendDataToDevice extends Shape
{
    /**
     * @param array{
     *     Seq?: int<0, 16383>,
     *     MessageType?: 'CUSTOM_COMMAND_ID_NOTIFY'|'CUSTOM_COMMAND_ID_GET'|'CUSTOM_COMMAND_ID_SET'|'CUSTOM_COMMAND_ID_RESP',
     *     AckModeRetryDurationSecs?: int<0, 604800>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
