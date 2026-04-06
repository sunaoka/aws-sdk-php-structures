<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\CreateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileName
 * @property string $Timezone
 * @property string $Address
 * @property 'METRIC'|'IMPERIAL' $DistanceUnit
 * @property 'FAHRENHEIT'|'CELSIUS' $TemperatureUnit
 * @property 'ALEXA'|'AMAZON'|'ECHO'|'COMPUTER' $WakeWord
 * @property string|null $Locale
 * @property string|null $ClientRequestToken
 * @property bool|null $SetupModeDisabled
 * @property int|null $MaxVolumeLimit
 * @property bool|null $PSTNEnabled
 * @property bool|null $DataRetentionOptIn
 * @property Shapes\CreateMeetingRoomConfiguration|null $MeetingRoomConfiguration
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateProfileRequest extends Request
{
    /**
     * @param array{
     *     ProfileName: string,
     *     Timezone: string,
     *     Address: string,
     *     DistanceUnit: 'METRIC'|'IMPERIAL',
     *     TemperatureUnit: 'FAHRENHEIT'|'CELSIUS',
     *     WakeWord: 'ALEXA'|'AMAZON'|'ECHO'|'COMPUTER',
     *     Locale?: string|null,
     *     ClientRequestToken?: string|null,
     *     SetupModeDisabled?: bool|null,
     *     MaxVolumeLimit?: int|null,
     *     PSTNEnabled?: bool|null,
     *     DataRetentionOptIn?: bool|null,
     *     MeetingRoomConfiguration?: Shapes\CreateMeetingRoomConfiguration|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
