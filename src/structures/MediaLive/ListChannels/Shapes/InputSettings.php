<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AudioSelector>|null $AudioSelectors
 * @property list<CaptionSelector>|null $CaptionSelectors
 * @property 'DISABLED'|'ENABLED'|null $DeblockFilter
 * @property 'DISABLED'|'ENABLED'|null $DenoiseFilter
 * @property int<1, 5>|null $FilterStrength
 * @property 'AUTO'|'DISABLED'|'FORCED'|null $InputFilter
 * @property NetworkInputSettings|null $NetworkInputSettings
 * @property int<32, 8191>|null $Scte35Pid
 * @property 'IGNORE'|'PREFER'|null $Smpte2038DataPreference
 * @property 'CONTINUE'|'LOOP'|null $SourceEndBehavior
 * @property VideoSelector|null $VideoSelector
 */
class InputSettings extends Shape
{
    /**
     * @param array{
     *     AudioSelectors?: list<AudioSelector>|null,
     *     CaptionSelectors?: list<CaptionSelector>|null,
     *     DeblockFilter?: 'DISABLED'|'ENABLED'|null,
     *     DenoiseFilter?: 'DISABLED'|'ENABLED'|null,
     *     FilterStrength?: int<1, 5>|null,
     *     InputFilter?: 'AUTO'|'DISABLED'|'FORCED'|null,
     *     NetworkInputSettings?: NetworkInputSettings|null,
     *     Scte35Pid?: int<32, 8191>|null,
     *     Smpte2038DataPreference?: 'IGNORE'|'PREFER'|null,
     *     SourceEndBehavior?: 'CONTINUE'|'LOOP'|null,
     *     VideoSelector?: VideoSelector|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
