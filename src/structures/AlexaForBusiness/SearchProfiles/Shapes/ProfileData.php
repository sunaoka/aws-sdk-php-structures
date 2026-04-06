<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SearchProfiles\Shapes;

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
 */
class ProfileData extends Shape
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
     *     Locale?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
