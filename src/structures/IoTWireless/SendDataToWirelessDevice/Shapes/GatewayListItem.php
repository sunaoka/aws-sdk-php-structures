<?php

namespace Sunaoka\Aws\Structures\IoTWireless\SendDataToWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GatewayId
 * @property int<100000000, 1000000000> $DownlinkFrequency
 */
class GatewayListItem extends Shape
{
    /**
     * @param array{
     *     GatewayId: string,
     *     DownlinkFrequency: int<100000000, 1000000000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
