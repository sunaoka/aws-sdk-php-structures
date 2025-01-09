<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BITRATE_CLASS_25'|'BITRATE_CLASS_35'|'BITRATE_CLASS_50' $BitrateClass
 * @property 'DISABLED'|'ENABLED' $FlickerAdaptiveQuantization
 * @property 'DISABLED'|'ENABLED' $GopBReference
 * @property int<0, 2147483647> $GopClosedCadence
 * @property int<0, 1152000000> $HrdBufferSize
 * @property 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD' $InterlaceMode
 * @property 'SINGLE_PASS'|'SINGLE_PASS_HQ'|'MULTI_PASS_HQ' $QualityTuningLevel
 * @property int<4, 12> $Slices
 * @property 'NONE'|'HARD' $Telecine
 */
class XavcHdProfileSettings extends Shape
{
    /**
     * @param array{
     *     BitrateClass?: 'BITRATE_CLASS_25'|'BITRATE_CLASS_35'|'BITRATE_CLASS_50',
     *     FlickerAdaptiveQuantization?: 'DISABLED'|'ENABLED',
     *     GopBReference?: 'DISABLED'|'ENABLED',
     *     GopClosedCadence?: int<0, 2147483647>,
     *     HrdBufferSize?: int<0, 1152000000>,
     *     InterlaceMode?: 'PROGRESSIVE'|'TOP_FIELD'|'BOTTOM_FIELD'|'FOLLOW_TOP_FIELD'|'FOLLOW_BOTTOM_FIELD',
     *     QualityTuningLevel?: 'SINGLE_PASS'|'SINGLE_PASS_HQ'|'MULTI_PASS_HQ',
     *     Slices?: int<4, 12>,
     *     Telecine?: 'NONE'|'HARD'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
