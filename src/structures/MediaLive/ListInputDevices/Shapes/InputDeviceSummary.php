<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListInputDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property 'DISCONNECTED'|'CONNECTED' $ConnectionState
 * @property 'SYNCED'|'SYNCING' $DeviceSettingsSyncState
 * @property 'UP_TO_DATE'|'NOT_UP_TO_DATE'|'UPDATING' $DeviceUpdateStatus
 * @property InputDeviceHdSettings $HdDeviceSettings
 * @property string $Id
 * @property string $MacAddress
 * @property string $Name
 * @property InputDeviceNetworkSettings $NetworkSettings
 * @property string $SerialNumber
 * @property 'HD'|'UHD' $Type
 * @property InputDeviceUhdSettings $UhdDeviceSettings
 * @property array<string, string> $Tags
 * @property string $AvailabilityZone
 * @property list<string> $MedialiveInputArns
 * @property 'NONE'|'MEDIALIVE_INPUT'|'MEDIACONNECT_FLOW' $OutputType
 */
class InputDeviceSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     ConnectionState?: 'DISCONNECTED'|'CONNECTED',
     *     DeviceSettingsSyncState?: 'SYNCED'|'SYNCING',
     *     DeviceUpdateStatus?: 'UP_TO_DATE'|'NOT_UP_TO_DATE'|'UPDATING',
     *     HdDeviceSettings?: InputDeviceHdSettings,
     *     Id?: string,
     *     MacAddress?: string,
     *     Name?: string,
     *     NetworkSettings?: InputDeviceNetworkSettings,
     *     SerialNumber?: string,
     *     Type?: 'HD'|'UHD',
     *     UhdDeviceSettings?: InputDeviceUhdSettings,
     *     Tags?: array<string, string>,
     *     AvailabilityZone?: string,
     *     MedialiveInputArns?: list<string>,
     *     OutputType?: 'NONE'|'MEDIALIVE_INPUT'|'MEDIACONNECT_FLOW'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
