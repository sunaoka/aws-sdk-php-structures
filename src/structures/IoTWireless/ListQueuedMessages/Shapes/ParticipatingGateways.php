<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListQueuedMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEQUENTIAL'|'CONCURRENT'|'USING_UPLINK_GATEWAY' $DownlinkMode
 * @property list<GatewayListItem> $GatewayList
 * @property int $TransmissionInterval
 */
class ParticipatingGateways extends Shape
{
    /**
     * @param array{
     *     DownlinkMode: 'SEQUENTIAL'|'CONCURRENT'|'USING_UPLINK_GATEWAY',
     *     GatewayList: list<GatewayListItem>,
     *     TransmissionInterval: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
