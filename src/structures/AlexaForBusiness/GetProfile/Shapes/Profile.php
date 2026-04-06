<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProfileArn
 * @property string|null $ProfileName
 * @property bool|null $IsDefault
 * @property string|null $Address
 * @property string|null $Timezone
 * @property 'METRIC'|'IMPERIAL'|null $DistanceUnit
 * @property 'FAHRENHEIT'|'CELSIUS'|null $TemperatureUnit
 * @property 'ALEXA'|'AMAZON'|'ECHO'|'COMPUTER'|null $WakeWord
 * @property string|null $Locale
 * @property bool|null $SetupModeDisabled
 * @property int|null $MaxVolumeLimit
 * @property bool|null $PSTNEnabled
 * @property bool|null $DataRetentionOptIn
 * @property string|null $AddressBookArn
 * @property MeetingRoomConfiguration|null $MeetingRoomConfiguration
 */
class Profile extends Shape
{
    /**
     * @param array{
     *     ProfileArn?: string|null,
     *     ProfileName?: string|null,
     *     IsDefault?: bool|null,
     *     Address?: string|null,
     *     Timezone?: string|null,
     *     DistanceUnit?: 'METRIC'|'IMPERIAL'|null,
     *     TemperatureUnit?: 'FAHRENHEIT'|'CELSIUS'|null,
     *     WakeWord?: 'ALEXA'|'AMAZON'|'ECHO'|'COMPUTER'|null,
     *     Locale?: string|null,
     *     SetupModeDisabled?: bool|null,
     *     MaxVolumeLimit?: int|null,
     *     PSTNEnabled?: bool|null,
     *     DataRetentionOptIn?: bool|null,
     *     AddressBookArn?: string|null,
     *     MeetingRoomConfiguration?: MeetingRoomConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
