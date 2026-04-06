<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListInputDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property 'DISCONNECTED'|'CONNECTED'|null $ConnectionState
 * @property 'SYNCED'|'SYNCING'|null $DeviceSettingsSyncState
 * @property 'UP_TO_DATE'|'NOT_UP_TO_DATE'|'UPDATING'|null $DeviceUpdateStatus
 * @property InputDeviceHdSettings|null $HdDeviceSettings
 * @property string|null $Id
 * @property string|null $MacAddress
 * @property string|null $Name
 * @property InputDeviceNetworkSettings|null $NetworkSettings
 * @property string|null $SerialNumber
 * @property 'HD'|'UHD'|null $Type
 * @property InputDeviceUhdSettings|null $UhdDeviceSettings
 * @property array<string, string>|null $Tags
 * @property string|null $AvailabilityZone
 * @property list<string>|null $MedialiveInputArns
 * @property 'NONE'|'MEDIALIVE_INPUT'|'MEDIACONNECT_FLOW'|null $OutputType
 */
class InputDeviceSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     ConnectionState?: 'DISCONNECTED'|'CONNECTED'|null,
     *     DeviceSettingsSyncState?: 'SYNCED'|'SYNCING'|null,
     *     DeviceUpdateStatus?: 'UP_TO_DATE'|'NOT_UP_TO_DATE'|'UPDATING'|null,
     *     HdDeviceSettings?: InputDeviceHdSettings|null,
     *     Id?: string|null,
     *     MacAddress?: string|null,
     *     Name?: string|null,
     *     NetworkSettings?: InputDeviceNetworkSettings|null,
     *     SerialNumber?: string|null,
     *     Type?: 'HD'|'UHD'|null,
     *     UhdDeviceSettings?: InputDeviceUhdSettings|null,
     *     Tags?: array<string, string>|null,
     *     AvailabilityZone?: string|null,
     *     MedialiveInputArns?: list<string>|null,
     *     OutputType?: 'NONE'|'MEDIALIVE_INPUT'|'MEDIACONNECT_FLOW'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
