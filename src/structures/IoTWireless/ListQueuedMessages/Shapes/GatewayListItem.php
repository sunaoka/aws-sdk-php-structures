<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListQueuedMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GatewayId
 * @property int $DownlinkFrequency
 */
class GatewayListItem extends Shape
{
    /**
     * @param array{
     *     GatewayId: string,
     *     DownlinkFrequency: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
