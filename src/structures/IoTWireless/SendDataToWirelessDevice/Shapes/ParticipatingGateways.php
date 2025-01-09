<?php

namespace Sunaoka\Aws\Structures\IoTWireless\SendDataToWirelessDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEQUENTIAL'|'CONCURRENT'|'USING_UPLINK_GATEWAY' $DownlinkMode
 * @property list<GatewayListItem> $GatewayList
 * @property int<1, 604800> $TransmissionInterval
 */
class ParticipatingGateways extends Shape
{
    /**
     * @param array{
     *     DownlinkMode: 'SEQUENTIAL'|'CONCURRENT'|'USING_UPLINK_GATEWAY',
     *     GatewayList: list<GatewayListItem>,
     *     TransmissionInterval: int<1, 604800>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
