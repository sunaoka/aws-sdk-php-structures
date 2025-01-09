<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInputDevice;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property 'DISCONNECTED'|'CONNECTED' $ConnectionState
 * @property 'SYNCED'|'SYNCING' $DeviceSettingsSyncState
 * @property 'UP_TO_DATE'|'NOT_UP_TO_DATE'|'UPDATING' $DeviceUpdateStatus
 * @property Shapes\InputDeviceHdSettings $HdDeviceSettings
 * @property string $Id
 * @property string $MacAddress
 * @property string $Name
 * @property Shapes\InputDeviceNetworkSettings $NetworkSettings
 * @property string $SerialNumber
 * @property 'HD'|'UHD' $Type
 * @property Shapes\InputDeviceUhdSettings $UhdDeviceSettings
 * @property array<string, string> $Tags
 * @property string $AvailabilityZone
 * @property list<string> $MedialiveInputArns
 * @property 'NONE'|'MEDIALIVE_INPUT'|'MEDIACONNECT_FLOW' $OutputType
 */
class UpdateInputDeviceResponse extends Response
{
}
