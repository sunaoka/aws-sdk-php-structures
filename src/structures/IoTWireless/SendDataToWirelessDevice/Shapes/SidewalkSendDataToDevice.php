<?php

namespace Sunaoka\Aws\Structures\IoTWireless\SendDataToWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 16383>|null $Seq
 * @property 'CUSTOM_COMMAND_ID_NOTIFY'|'CUSTOM_COMMAND_ID_GET'|'CUSTOM_COMMAND_ID_SET'|'CUSTOM_COMMAND_ID_RESP'|null $MessageType
 * @property int<0, 604800>|null $AckModeRetryDurationSecs
 */
class SidewalkSendDataToDevice extends Shape
{
    /**
     * @param array{
     *     Seq?: int<0, 16383>|null,
     *     MessageType?: 'CUSTOM_COMMAND_ID_NOTIFY'|'CUSTOM_COMMAND_ID_GET'|'CUSTOM_COMMAND_ID_SET'|'CUSTOM_COMMAND_ID_RESP'|null,
     *     AckModeRetryDurationSecs?: int<0, 604800>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
