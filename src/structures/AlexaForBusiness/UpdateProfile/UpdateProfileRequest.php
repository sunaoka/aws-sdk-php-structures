<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ProfileArn
 * @property string|null $ProfileName
 * @property bool|null $IsDefault
 * @property string|null $Timezone
 * @property string|null $Address
 * @property 'METRIC'|'IMPERIAL'|null $DistanceUnit
 * @property 'FAHRENHEIT'|'CELSIUS'|null $TemperatureUnit
 * @property 'ALEXA'|'AMAZON'|'ECHO'|'COMPUTER'|null $WakeWord
 * @property string|null $Locale
 * @property bool|null $SetupModeDisabled
 * @property int|null $MaxVolumeLimit
 * @property bool|null $PSTNEnabled
 * @property bool|null $DataRetentionOptIn
 * @property Shapes\UpdateMeetingRoomConfiguration|null $MeetingRoomConfiguration
 */
class UpdateProfileRequest extends Request
{
    /**
     * @param array{
     *     ProfileArn?: string|null,
     *     ProfileName?: string|null,
     *     IsDefault?: bool|null,
     *     Timezone?: string|null,
     *     Address?: string|null,
     *     DistanceUnit?: 'METRIC'|'IMPERIAL'|null,
     *     TemperatureUnit?: 'FAHRENHEIT'|'CELSIUS'|null,
     *     WakeWord?: 'ALEXA'|'AMAZON'|'ECHO'|'COMPUTER'|null,
     *     Locale?: string|null,
     *     SetupModeDisabled?: bool|null,
     *     MaxVolumeLimit?: int|null,
     *     PSTNEnabled?: bool|null,
     *     DataRetentionOptIn?: bool|null,
     *     MeetingRoomConfiguration?: Shapes\UpdateMeetingRoomConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
