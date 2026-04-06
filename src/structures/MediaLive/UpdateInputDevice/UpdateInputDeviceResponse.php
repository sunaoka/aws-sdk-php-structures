<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInputDevice;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property 'DISCONNECTED'|'CONNECTED'|null $ConnectionState
 * @property 'SYNCED'|'SYNCING'|null $DeviceSettingsSyncState
 * @property 'UP_TO_DATE'|'NOT_UP_TO_DATE'|'UPDATING'|null $DeviceUpdateStatus
 * @property Shapes\InputDeviceHdSettings|null $HdDeviceSettings
 * @property string|null $Id
 * @property string|null $MacAddress
 * @property string|null $Name
 * @property Shapes\InputDeviceNetworkSettings|null $NetworkSettings
 * @property string|null $SerialNumber
 * @property 'HD'|'UHD'|null $Type
 * @property Shapes\InputDeviceUhdSettings|null $UhdDeviceSettings
 * @property array<string, string>|null $Tags
 * @property string|null $AvailabilityZone
 * @property list<string>|null $MedialiveInputArns
 * @property 'NONE'|'MEDIALIVE_INPUT'|'MEDIACONNECT_FLOW'|null $OutputType
 */
class UpdateInputDeviceResponse extends Response
{
}
