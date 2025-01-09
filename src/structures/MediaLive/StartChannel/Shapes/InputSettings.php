<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AudioSelector> $AudioSelectors
 * @property list<CaptionSelector> $CaptionSelectors
 * @property 'DISABLED'|'ENABLED' $DeblockFilter
 * @property 'DISABLED'|'ENABLED' $DenoiseFilter
 * @property int $FilterStrength
 * @property 'AUTO'|'DISABLED'|'FORCED' $InputFilter
 * @property NetworkInputSettings $NetworkInputSettings
 * @property int $Scte35Pid
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
     *     FilterStrength?: int,
     *     InputFilter?: 'AUTO'|'DISABLED'|'FORCED',
     *     NetworkInputSettings?: NetworkInputSettings,
     *     Scte35Pid?: int,
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
