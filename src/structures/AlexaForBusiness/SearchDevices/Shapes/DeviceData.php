<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SearchDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceArn
 * @property string|null $DeviceSerialNumber
 * @property string|null $DeviceType
 * @property string|null $DeviceName
 * @property string|null $SoftwareVersion
 * @property string|null $MacAddress
 * @property 'READY'|'PENDING'|'WAS_OFFLINE'|'DEREGISTERED'|'FAILED'|null $DeviceStatus
 * @property string|null $NetworkProfileArn
 * @property string|null $NetworkProfileName
 * @property string|null $RoomArn
 * @property string|null $RoomName
 * @property DeviceStatusInfo|null $DeviceStatusInfo
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 */
class DeviceData extends Shape
{
    /**
     * @param array{
     *     DeviceArn?: string|null,
     *     DeviceSerialNumber?: string|null,
     *     DeviceType?: string|null,
     *     DeviceName?: string|null,
     *     SoftwareVersion?: string|null,
     *     MacAddress?: string|null,
     *     DeviceStatus?: 'READY'|'PENDING'|'WAS_OFFLINE'|'DEREGISTERED'|'FAILED'|null,
     *     NetworkProfileArn?: string|null,
     *     NetworkProfileName?: string|null,
     *     RoomArn?: string|null,
     *     RoomName?: string|null,
     *     DeviceStatusInfo?: DeviceStatusInfo|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
