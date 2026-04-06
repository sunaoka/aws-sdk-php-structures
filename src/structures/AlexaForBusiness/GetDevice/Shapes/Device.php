<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceArn
 * @property string|null $DeviceSerialNumber
 * @property string|null $DeviceType
 * @property string|null $DeviceName
 * @property string|null $SoftwareVersion
 * @property string|null $MacAddress
 * @property string|null $RoomArn
 * @property 'READY'|'PENDING'|'WAS_OFFLINE'|'DEREGISTERED'|'FAILED'|null $DeviceStatus
 * @property DeviceStatusInfo|null $DeviceStatusInfo
 * @property DeviceNetworkProfileInfo|null $NetworkProfileInfo
 */
class Device extends Shape
{
    /**
     * @param array{
     *     DeviceArn?: string|null,
     *     DeviceSerialNumber?: string|null,
     *     DeviceType?: string|null,
     *     DeviceName?: string|null,
     *     SoftwareVersion?: string|null,
     *     MacAddress?: string|null,
     *     RoomArn?: string|null,
     *     DeviceStatus?: 'READY'|'PENDING'|'WAS_OFFLINE'|'DEREGISTERED'|'FAILED'|null,
     *     DeviceStatusInfo?: DeviceStatusInfo|null,
     *     NetworkProfileInfo?: DeviceNetworkProfileInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
