<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SearchDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DeviceStatusDetail>|null $DeviceStatusDetails
 * @property 'ONLINE'|'OFFLINE'|null $ConnectionStatus
 * @property \Aws\Api\DateTimeResult|null $ConnectionStatusUpdatedTime
 */
class DeviceStatusInfo extends Shape
{
    /**
     * @param array{
     *     DeviceStatusDetails?: list<DeviceStatusDetail>|null,
     *     ConnectionStatus?: 'ONLINE'|'OFFLINE'|null,
     *     ConnectionStatusUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
