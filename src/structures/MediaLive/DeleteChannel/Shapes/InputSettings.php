<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AudioSelector> $AudioSelectors
 * @property list<CaptionSelector> $CaptionSelectors
 * @property 'DISABLED'|'ENABLED' $DeblockFilter
 * @property 'DISABLED'|'ENABLED' $DenoiseFilter
 * @property int<1, 5> $FilterStrength
 * @property 'AUTO'|'DISABLED'|'FORCED' $InputFilter
 * @property NetworkInputSettings $NetworkInputSettings
 * @property int<32, 8191> $Scte35Pid
 * @property 'IGNORE'|'PREFER' $Smpte2038DataPreference
 * @property 'CONTINUE'|'LOOP' $SourceEndBehavior
 * @property VideoSelector $VideoSelector
 */
class InputSettings extends Shape
{
    /**
     * @param array{
     *     AudioSelectors?: list<AudioSelector>,
     *     CaptionSelectors?: list<CaptionSelector>,
     *     DeblockFilter?: 'DISABLED'|'ENABLED',
     *     DenoiseFilter?: 'DISABLED'|'ENABLED',
     *     FilterStrength?: int<1, 5>,
     *     InputFilter?: 'AUTO'|'DISABLED'|'FORCED',
     *     NetworkInputSettings?: NetworkInputSettings,
     *     Scte35Pid?: int<32, 8191>,
     *     Smpte2038DataPreference?: 'IGNORE'|'PREFER',
     *     SourceEndBehavior?: 'CONTINUE'|'LOOP',
     *     VideoSelector?: VideoSelector
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
